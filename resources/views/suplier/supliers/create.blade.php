@extends('layouts.suplier')
@section('title', 'suplier')
@section('titlebar', 'Tambah Suplier')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('suplier.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Toko Cabang</label>
                        <input type="text" class="form-control" name="nama_toko" required="">
                    </div>
                    <div class="form-group">
                        <label>Alamat Toko Cabang</label>
                        <input type="text" class="form-control" name="alamat" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="barang" required="">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input type="number" class="form-control" name="stok" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('suplier.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection