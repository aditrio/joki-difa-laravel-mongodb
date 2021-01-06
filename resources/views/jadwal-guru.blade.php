@extends('layouts.dashApp')

@section('header-content')
    Jadwal
@endsection

@section('desc-content')
    E-Absensi memudahkan pelajar dan tenaga pelajar dalam memanagement absensi secara online
@endsection

@section('main-content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Jadwal</h3>
        </div>
        <div class="card-body">
            <form class="form-inline" action="{{route('store.jadwal')}}" method="POST">
                @csrf
                <div class="form-group mb-2">
                  
                  <input type="text" name="kelas" class="form-control" id="inputkelas" placeholder="Mata Pelajaran">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  
                  <input type="date" name="tanggal" class="form-control" id="inputtanggal" placeholder="Tanggal">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Tambah Jadwal</button>
              </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Jadwal</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kehadiran</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($data as $key => $item)
                        <tr>
                            <td scope="row">{{$key + 1}}</td>
                            <td hidden>{{$item->id}}</td>
                            <td>{{$item->kelas}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{count($item->testArray)}}</td>
                            <td>
                                <button class="btn btn-sm btn-info btn-edit" data-toggle="modal" data-target="#editmodal">Edit</button>
                                <button class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-target="#deletemodal">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
        </div>
    </div>

@endsection