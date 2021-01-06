@extends('layouts.dashApp')

@section('header-content')
    Absensi
@endsection

@section('desc-content')
    E-Absensi memudahkan pelajar dan tenaga pelajar dalam memanagement absensi secara online
@endsection

@section('main-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Absensi</h3>
    </div>
    <div class="card-body">
        @foreach ($data as $key => $item)
        <ul class="list-group">
            <li class="list-group-item bg-dark">
                <h3 class="text-light">Kelas : {{$item->kelas}} || <small>{{$item->tanggal}}</small></h3> 
            </li>
            @foreach ($item->testArray as $i => $name)
            <li class="list-group-item">
                <h4>{{$i + 1}} | <span class="ml-2">{{$name}}</span> </h4>
            </li>
            @endforeach
           
            
          </ul>
          <br>
        @endforeach
    </div>
</div>
@endsection