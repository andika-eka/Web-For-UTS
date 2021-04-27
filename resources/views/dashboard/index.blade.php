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
           
            <div class="container" style="color:white; padding:30px">
                <div class="card bg-success " style=" height :120px;">
                    <div class="card-header">pendapatan</div>
                    <div class="card-body text-center" >
                        <h2 class="card-title ">Rp.{{$rev}}</h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="container"style="padding:30px;">
                <div class="card border-primary mb-3" style=" height :200px;">
                    <div class="card-header">jumlah penyewa</div>
                    <div class="card-body text-primary text-center">
                        <h2 class="card-title ">{{count($sewa)}}</h2>
                        <hr>
                        <a type="button" class="btn btn-outline-primary" href="sewa/create "> Daftarkan Penyewa</a>
                        <a type="button" class="btn btn-outline-primary" href="pembayaran/create "> buat pembayaran</a>
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
