
@extends('layouts.dashSiswaApp')

@section('header-content')
    Dashboard
@endsection

@section('desc-content')
    E-Absensi memudahkan pelajar dan tenaga pelajar dalam memanagement absensi secara online
@endsection

@section('main-content')

 <div class="row">

     <div class="col-lg">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <h5 class="text-muted">Jadwal</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1"><i class="fas fa-calendar-check    "></i></i> | {{count($jadwal)}}</h1>
                </div>
                
            </div>
        </div>
     </div>
 </div>



        
@endsection