@extends('layouts.contractor')

@section('title', 'plans')
@section('titlebar', 'Tambah Perencanaan Pemesanan barang')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('plan.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input type="text" class="form-control" name="nama_proyek" required="">
                    </div>
                    <div class="form-group">
                        <label>Koor Proyek</label>
                        <input type="text" class="form-control" name="koor" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Bahan</label>
                        <input type="text" class="form-control" name="nama_bahan" required="">
                    </div>
                    <div class="form-group">
                        <label>Banyak Bahan</label>
                        <input type="number" class="form-control" name="banyak_bahan" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Suplier</label>
                        <input type="text" class="form-control" name="nama_suplier" required="">
                    </div>
                    <div class="form-group">
                        <label>Alamat Suplier</label>
                        <input type="text" class="form-control" name="alamat_suplier" required="">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('plan.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection