@extends('layouts.suplier')
@section('title', 'suplier')
@section('titlebar', 'Edit Suplier')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('suplier.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" required="" value="{{ $data -> nama_perusahaan}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Toko Cabang</label>
                        <input type="text" class="form-control" name="nama_toko" required="" value="{{ $data -> nama_toko}}">
                    </div>
                    <div class="form-group">
                        <label>Alamat Toko Cabang</label>
                        <input type="text" class="form-control" name="alamat" required="" value="{{ $data -> alamat}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="barang" required="" value="{{ $data -> barang}}">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input type="number" class="form-control" name="stok" required="" value="{{$data->stok}}">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="" value="{{ $data -> harga_satuan}}">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('suplier.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection