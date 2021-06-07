@extends('layouts.stakeholder')
@section('title', 'plans')
@section('titlebar', 'Data Perencanaan Pemesanan Barang')
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
                            <th>Nama Proyek</th>
                            <th>Koor Proyek</th>
                            <th>Nama Bahan</th>
                            <th>Banyak Bahan</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Nama Suplier</th>
                            <th>Alamat Suplier</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->nama_proyek }}</td>
                            <td>{{ $row->koor }}</td>
                            <td>{{ $row->nama_bahan }}</td>
                            <td>{{ $row->banyak_bahan }}</td>
                            <td>Rp. {{ $row->harga_satuan}}</td>
                            <td>Rp. {{ $row->banyak_bahan * $row->harga_satuan  }}</td>
                            <td>{{ $row->nama_suplier }}</td>
                            <td>{{ $row->alamat_suplier }}</td>
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