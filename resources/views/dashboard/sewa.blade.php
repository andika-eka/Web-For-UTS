@extends('dashboard.template.layout')

@section('content')
<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                daftar sewa
            </div>
            <div class="card-body">
            @if(count($sewa)>0)
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nama</th>
                                <th>no unit</th>
                                <th>dari</th>
                                <th>sampai</th>
                                <th>harga</th>
                                <th>status</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>nama</th>
                                <th>no unit</th>
                                <th>dari</th>
                                <th>sampai</th>
                                <th>harga</th>
                                <th>status</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                        <tbody>
                         @foreach($sewa as $Sewa)   
                            <tr>
                                <td>{{$Sewa->id}}</td>
                                <td>{{$Sewa->nama}}</td>
                                <td>{{$Sewa->no_unit}}</td>
                                <td>{{$Sewa->dari}}</td>
                                <td>{{$Sewa->sampai}}</td>
                                <td>Rp.{{$Sewa->harga}}</td>
                                <td>
                                @if ($Sewa->dari > Carbon\Carbon::now())
                                    <b class="badge rounded-pill bg-secondary">reserved</b>
                                @else
                                    @if ($Sewa->sampai > Carbon\Carbon::now())
                                        <b class="badge rounded-pill bg-success">active</b>
                                    @else
                                        <b class="badge rounded-pill bg-danger">expired</b>
                                    @endif
                                @endif
                                </td>
                                <td><a class="badge rounded-pill bg-primary" href="sewa/{{$Sewa->id}} ">details</a></td>
                            </tr>
                         @endforeach   
                        </tbody>
                    </table>
                    @else
                    <p>data tidak ditemukan</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
