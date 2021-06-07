@extends('layouts.suplier')
@section('title', 'stock Toko')
@section('titlebar', 'Tambah Data Stok Toko')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('stockToko.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Bahan</label>
                        <input type="text" class="form-control" name="nama_bahan" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Stok</label>
                        <input type="number" class="form-control" name="jumlah_stok" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" required="">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('stockToko.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection