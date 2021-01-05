<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jadwal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dash()
    {
        $siswa = User::where('role',"siswa")->get();
        $jadwal = Jadwal::all();

        return view('dash-guru' , ['siswa' => $siswa, 'jadwal' => $jadwal]);
    }

    public function jadwal()
    {
        return view('jadwal-guru');
    }

    public function absensi()
    {
        return view('absensi-guru');
    }
}
