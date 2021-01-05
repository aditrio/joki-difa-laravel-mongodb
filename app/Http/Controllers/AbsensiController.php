<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class AbsensiController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();

        return view('absensi-guru', ['data' => $data]);
    }
}
