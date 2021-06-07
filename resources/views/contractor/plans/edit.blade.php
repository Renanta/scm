@extends('layouts.contractor')
@section('title', 'plans')
@section('titlebar', 'Edit Perencanaan Pemesanan barang')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('plan.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input type="text" class="form-control" name="nama_proyek" required="" value="{{ $data -> nama_proyek}}">
                    </div>
                    <div class="form-group">
                        <label>Koor Proyek</label>
                        <input type="text" class="form-control" name="koor" required="" value="{{ $data -> koor}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Bahan</label>
                        <input type="text" class="form-control" name="nama_bahan" required="" value="{{ $data -> nama_bahan}}">
                    </div>
                    <div class="form-group">
                        <label>Banyak Bahan</label>
                        <input type="number" class="form-control" name="banyak_bahan" required="" value="{{ $data -> banyak_bahan}}">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="" value="{{ $data -> harga_satuan}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Suplier</label>
                        <input type="text" class="form-control" name="nama_suplier" required="" value="{{ $data -> nama_suplier}}">
                    </div>
                    <div class="form-group">
                        <label>Alamat Suplier</label>
                        <input type="text" class="form-control" name="alamat_suplier" required="" value="{{ $data -> alamat_suplier}}">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('plan.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection