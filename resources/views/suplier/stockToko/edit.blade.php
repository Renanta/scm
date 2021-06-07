@extends('layouts.suplier')
@section('title', 'stock Toko')
@section('titlebar', 'Edit Suplier')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('stockToko.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Bahan</label>
                        <input type="text" class="form-control" name="nama_bahan" required="" value="{{ $data -> nama_bahan}}">
                    </div>
                    <div class=" form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="" value="{{ $data -> harga_satuan}}">
                    </div>
                    <div class=" form-group">
                        <label>Jumlah Stok</label>
                        <input type="number" class="form-control" name="jumlah_stok" required="" value="{{ $data -> jumlah_stok}}">
                    </div>
                    <div class=" form-group">
                        <label>Nama Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" required="" value="{{ $data -> keterangann}}">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('stockToko.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection