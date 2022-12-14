@extends('template.layout')

@section('title')
    Barang
@endsection

@section('content')
<section class="section-header">
    Barang
</section>

<section class="section-body">
    <div class="row">
        <div class="col-12 col-md-7 col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Data Barang</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td style="width: 5%">#</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td style="width: 15%">Aksi</td>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Barang</h4>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                            <label>Kode</label>
                            <input type="text" class="form-control" name="nama" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" autofocus>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
</form>

            </div>
        </div>
    </div>

</section>
@endsection