@extends('layouts.suplier')
@section('title', 'pesanan')
@section('titlebar', 'Data Pesanan')
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
                            <th>Nama Bahan</th>
                            <th>Jumlah Bahan</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Tanggal</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->nama_bahan }}</td>
                            <td>{{ $row->jumlah_bahan }}</td>
                            <td>{{ $row->harga_satuan }}</td>
                            <td>{{ $row->jumlah_bahan * $row->harga_satuan }}</td>
                            <td>{{ $row->updated_at }}</td>
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