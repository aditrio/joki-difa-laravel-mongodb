<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Jadwal;

class AbsensiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        if (Auth::user()->role == "siswa") {
            
            return $this->absensiSiswa();
        }

        $data = Jadwal::all();

        return view('absensi-guru', ['data' => $data]);
    }


    public function absensiSiswa()
    {
        $jadwal = Jadwal::all();
        $status = array();
        
        for ($i=0; $i < count($jadwal); $i++) { 
            
            if (in_array(Auth::user()->name, $jadwal[$i]->testArray)) {
                array_push($status, "Hadir");
            }else{
                array_push($status, "Belum Submit");
            }

            

        }

        
        return view('absensi-siswa' , ['jadwal' => $jadwal, 'status' => $status]);

    }

    public function absen($nama, $id){

        $jadwal = Jadwal::find($id);

        $submit = $jadwal->testArray;
        array_push($submit, $nama);

        $jadwal->update([
            'testArray' => $submit,
        ]);

        return redirect()->back();

    }
}
