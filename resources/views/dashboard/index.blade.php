@extends('dashboard.template.layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <hr>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card border-primary mb-3" style="max-width: 18rem; height :200px;">
                    <div class="card-header">jumlah penyewa</div>
                    <div class="card-body text-primary text-center">
                        <h2 class="card-title ">{{count($sewa)}}</h2>
                        <hr>
                        <a type="button" class="btn btn-outline-primary" href="sewa/create "> Daftarkan Penyewa</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6" style="color:white;">
                <div class="card bg-success mb-3" style="max-width: 18rem; height :200px;">
                    <div class="card-header">pendapatan</div>
                    <div class="card-body text-center" >
                        <h2 class="card-title ">Rp.{{$rev}}</h2>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="row">

        </div>
        
           
    </div>
</main>
@endsection
@include('dashboard.template.footer')
