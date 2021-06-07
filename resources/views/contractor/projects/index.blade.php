@extends('layouts.contractor')
@section('title', 'project')
@section('titlebar', 'Data Proyek')
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
                <a href="{{route('project.create')}}" class="btn btn-primary mb-2">Tambah Proyek Pembangunan</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Koor Proyek</th>
                            <th>Lokasi Proyek</th>
                            <th>Progress Bulanan</th>
                            <th>Kendala</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index+1}}</th>
                            <td>{{ $row->nama_proyek }}</td>
                            <td>{{ $row->koor }}</td>
                            <td>{{ $row->lokasi }}</td>
                            <td>{{ $row->progress }}</td>
                            <td>{{ $row-> kendala}}</td>
                            <td>
                                <a href="{{ route('project.edit' , $row->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{route('project.destroy', $row->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Apakah ingin menghapus data?')">
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