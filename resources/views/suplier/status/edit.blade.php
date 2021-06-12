@extends('layouts.suplier')
@section('title', 'status')
@section('titlebar', 'Edit Status Pesanan')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('status.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <input type="hidden" name="nama_bahan" value="{{ $data -> nama_bahan}}">
                    <input type="hidden" name="jumlah_bahan" value="{{ $data -> jumlah_bahan}}">
                    <input type="hidden" name="harga_satuan" value="{{ $data -> harga_satuan}}">

                    <div class="form-group mb-0">
                        <label>Status Pembayaran</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status_pembayaran">
                            <option>{{ $data -> status_pembayaran}}</option>
                            <option>Belum Dibayar</option>
                            <option>Lunas</option>
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label>Status Pesanan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status_pesanan">
                            <option>{{ $data -> status_pesanan}}</option>
                            <option>Dalam Perjalanan</option>
                            <option>Diterima</option>
                        </select>
                    </div>

                </div>
                <div class=" card-footer text-right">
                    <a href="{{ route('status.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection