@extends('dashboard.template.layout')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="font-weight-light my-4">buat pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <form class=" form-horizontal" method='POST' action="/pembayaran">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3" for='id_sewa'>id penyewa</label>
                                <div class="col ">
                                    <input type="number" class="form-control" id='id_sewa' name="id_sewa" min="1"
                                        max="300">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for='bulan'>lama (bulan):</label>
                                <div class="col ">
                                    <input type="number" class="form-control" id='bulan' name="bulan" min="1" max="12">
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
