@extends('layouts.suplier')
@section('title', 'report')
@section('titlebar', 'Edit Laporan Pemesanan')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('report.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Koor Proyek</label>
                        <input type="text" class="form-control" name="nama_koor" required="" value="{{ $data -> nama_koor}}">
                    </div>
                    <div class="form-group">
                        <label>Bahan Yang dipesan</label>
                        <input type="text" class="form-control" name="bahan_pesanan" required="" value="{{ $data -> bahan_pesanan}}">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Pesanan</label>
                        <input type="number" class="form-control" name="jumlah_pesanan" required="" value="{{ $data -> jumlah_pesanan}}">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="" value="{{ $data -> harga_satuan}}">
                    </div>
                </div>
                <div class=" card-footer text-right">
                    <a href="{{ route('report.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection