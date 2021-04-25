@extends('dashboard.template.layout')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="font-weight-light my-4">Daftarkan Penyewa</h3>
                    </div>
                    <div class="card-body">
                        <form class=" form-horizontal" method='POST' action="/sewa">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3" for='nama'>Nama:</label>
                                <div class="col">
                                    <input type="text" class="form-control" id='nama' name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for='NIK'>NIK:</label>
                                <div class="col">
                                    <input type="text" class="form-control" id='NIK' name="NIK" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='email'>E -mail:</label>
                                <div class="col">
                                    <input type="email" class="form-control" id='email' name="email" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='tlp'>No tlp:</label>
                                <div class="col">
                                    <input type="text" class="form-control" id='tlp' name="tlp" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='no_unit'>No unit:</label>
                                <div class="col ">
                                    <input type="number" class="form-control" id='no_unit' name="no_unit" min="1"
                                        max="300">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='harga'>harga:</label>
                                <div class="col ">
                                    <input type="number" class="form-control" id='harga' name="harga" min="50000" max="10000000">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='dari'>dari</label>
                                <div class="col ">
                                    <input type="date" class="form-control" id='dari' name="dari">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='sampai'>sampai</label>
                                <div class="col ">
                                    <input type="date" class="form-control" id='sampai' name="sampai">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='keterangan'>keterangan:</label>
                                <div class="col">
                                    <input type="text" class="form-control" id='keterangan' name="keterangan">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button class="btn btn-primary" name='Create'>Create</button>
                                    <a href="/dashboard" class="btn btn-secondary" name='cancel'>cancel</a>
                                </div>
                            </div>
                        </form>
                        <div class="card-footer text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
