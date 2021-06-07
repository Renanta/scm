@extends('layouts.contractor')
@section('title', 'stocks')
@section('titlebar', 'Data Stok Barang')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            @if($message = Session::get('message'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <div class="card-body">
                <a href="{{route('stock.create')}}" class="btn btn-primary mb-2">Tambah Stok Barang</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Stok Barang</th>
                            <th>Satuan</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->satuan }}</td>
                            <td>
                                <a href="{{ route('stock.edit' , $row->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{route('stock.destroy', $row->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Apakah ingin menghapus data?')">
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