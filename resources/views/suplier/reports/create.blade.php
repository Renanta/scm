@extends('layouts.suplier')
@section('title', 'report')
@section('titlebar', 'Tambah Laporan Pesanan')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('report.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Koor Proyek</label>
                        <input type="text" class="form-control" name="nama_koor" required="">
                    </div>
                    <div class="form-group">
                        <label>Bahan Yang dipesan</label>
                        <input type="text" class="form-control" name="bahan_pesanan" required="">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Pesanan</label>
                        <input type="number" class="form-control" name="jumlah_pesanan" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('report.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection