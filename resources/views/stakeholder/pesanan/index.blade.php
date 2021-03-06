@extends('layouts.stakeholder')
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
                <a href="{{route('pesanan.create')}}" class="btn btn-primary mb-2">Tambah Data Pesanan</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Bahan</th>
                            <th>Jumlah Bahan</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Status Pembayaran</th>
                            <th>Status Pesanan</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->updated_at }}</td>
                            <td>{{ $row->nama_bahan }}</td>
                            <td>{{ $row->jumlah_bahan }}</td>
                            <td>{{ $row->harga_satuan }}</td>
                            <td>{{ $row->jumlah_bahan * $row->harga_satuan }}</td>
                            <td>{{ $row->status_pembayaran }}</td>
                            <td>{{ $row->status_pesanan }}</td>
                            <td>
                                @if($row->status_pembayaran != 'Lunas')
                                <a href="{{ route('pesanan.edit' , $row->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{route('pesanan.destroy', $row->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Apakah ingin menghapus data?')">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                @else
                                <a href="#" class="btn btn-info disabled" role="button" aria-disabled="true">Edit</a>
                                <a href="#" class="btn btn-danger disabled" role="button" aria-disabled="true">Delete</a>
                                @endif
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