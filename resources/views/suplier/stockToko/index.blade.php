@extends('layouts.suplier')
@section('title', 'stok')
@section('titlebar', 'Data Stok Toko')
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
                <a href="{{route('stockToko.create')}}" class="btn btn-primary mb-2">Tambah Data Stock Toko</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Bahan</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah Stok</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->nama_bahan }}</td>
                            <td>{{ $row->harga_satuan }}</td>
                            <td>{{ $row->jumlah_stok }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>
                                <a href="{{ route('stockToko.edit' , $row->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{route('stockToko.destroy', $row->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Apakah ingin menghapus data?')">
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