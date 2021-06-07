@extends('layouts.suplier')
@section('title', 'report')
@section('titlebar', 'Data Laporan Pesanan')
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
                <a href="{{route('report.create')}}" class="btn btn-primary mb-2">Tambah Laporan Pemesanan</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Koor Proyek</th>
                            <th>Bahan Yang dipesan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->nama_koor }}</td>
                            <td>{{ $row->bahan_pesanan }}</td>
                            <td>{{ $row->jumlah_pesanan }}</td>
                            <td>{{ $row->harga_satuan }}</td>
                            <td>{{ $row->harga_satuan * $row->jumlah_pesanan }}</td>
                            <td>
                                <a href="{{ route('report.edit' , $row->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{route('report.destroy', $row->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Apakah ingin menghapus data?')">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
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