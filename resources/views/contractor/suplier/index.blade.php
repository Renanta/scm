@extends('layouts.contractor')
@section('title', 'suplier')
@section('titlebar', 'Data Suplier Barang')
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            @if($message = Session::get('message'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Toko Cabang</th>
                            <th>Alamat Toko Cabang</th>
                            <th>Barang yang dijual</th>
                            <th>Stok</th>
                            <th>Harga Satuan</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->nama_perusahaan }}</td>
                            <td>{{ $row->nama_toko }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->barang }}</td>
                            <td>{{ $row->stok }}</td>
                            <td>{{ $row->harga_satuan }}</td>
                        </tr>
                        @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection