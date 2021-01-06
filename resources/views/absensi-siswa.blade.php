
@extends('layouts.dashSiswaApp')

@section('header-content')
    Absensi Siswa
@endsection

@section('desc-content')
    E-Absensi memudahkan pelajar dan tenaga pelajar dalam memanagement absensi secara online
@endsection

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Jadwal Absensi</h3>
        </div>
        <div class="card-body ">

            @foreach ($jadwal as $key => $item)
            
                <div class="card-body border-3 border-left border-left-primary">
                    <div class="row">
                        <div class="col-lg-2">
                            <h4 class="mt-1 status-kehadiran" data-status="{{$status[$key]}}" >{{$status[$key]}}</h4>
                        </div>
                        <div class="col-lg-4">
                            <h4 class="mt-1">{{$item->kelas}}</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="mt-1">{{$item->tanggal}}</h4>
                        </div>
                        
                        <div class="col-lg">
                            <form action="/submit/absensi/{{Auth::user()->name}}/{{$item->id}}" method="POST">
                                @method("PUT")
                                @csrf
                                <button  type="submit" data-status="{{$status[$key]}}" class="btn btn-sm btn-success btn-submit">Submit Attendance</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach

        </div>
    </div>


        
@endsection