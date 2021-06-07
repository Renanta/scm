@extends('layouts.contractor')
@section('title', 'stock')
@section('titlebar', 'Edit Stok barang')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('stock.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" value="{{ $data -> name}}" name="name">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input type="text" class="form-control" value="{{ $data -> quantity}}" name="quantity">
                    </div>
                    <div class="form-group mb-0">
                        <label>Satuan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="satuan">
                            <option>{{ $data -> satuan}}</option>
                            <option>Kg</option>
                            <option>Karung</option>
                            <option>Meter</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('stock.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection