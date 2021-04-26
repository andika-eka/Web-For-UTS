@extends('dashboard.template.layout')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="font-weight-light my-4">No unit {{$sewa->no_unit}}</h3>
                        <table >
                            <tr>
                                <td>
                                    <h6>dibuat oleh</h6>
                                </td>
                                <td>
                                    <b>&ensp;: {{$user->name}}</b>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <h6>terakhir diubah oleh</h6>
                                </td>
                                <td>
                                    <b> &ensp;: {{$update->name}}</b>
                                </td>
                            </tr>
                        </table>
                        
                    </div>
                    <div class="card-body">
                        <h4>indenfitas</h4>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <h6>nama </h6>
                                </td>
                                <td>
                                    <h6>: {{$sewa->nama}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>NIK </h6>
                                </td>
                                <td>
                                    <h6>: {{$sewa->NIK}}</h6>
                                </td>
                            </tr>
                        </table>
                        <hr>

                        <h4>contact</h4>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <h6>E-mail </h6>
                                </td>
                                <td>
                                    <h6>: {{$sewa->email}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>no tlp </h6>
                                </td>
                                <td>
                                    <h6>: {{$sewa->tlp}}</h6>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <h4>kontrak:</h4>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <h6>dari </h6>
                                </td>
                                <td>
                                    <h6>: {{$sewa->dari}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>sampai </h6>
                                </td>
                                <td>
                                    <h6>: {{$sewa->sampai}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>harga</h6>
                                </td>
                                <td>
                                    <h6>: Rp. {{$sewa->harga}}</h6>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h4>keterangan:</h4>
                        <h6> {{$sewa->keterangan}}</h6>
                        <hr>

                        <a class="btn btn-primary btn-block" href="/sewa/{{$sewa->id}}/edit">Edit</a>
                        <hr>
                        <form name="delete" action="/sewa/{{ $sewa->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block" name='delete'>Delete</button>
                        </form>
                        <!-- <a class="btn btn-danger" href="">Delete</a> -->

                    </div>
                    <div class="card-footer text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
