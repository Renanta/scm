@extends('layouts.contractor')
@section('title', 'stocks')
@section('titlebar', 'Tambah Stok barang')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('stock.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="name" required="">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input type="text" class="form-control" name="quantity" required="">
                    </div>
                    <div class="form-group mb-0">
                        <label>Satuan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="satuan">
                            <option>Pilih Satuan</option>
                            <option>Kg</option>
                            <option>Karung</option>
                            <option>Meter</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('stock.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection