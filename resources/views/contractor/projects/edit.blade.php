@extends('layouts.contractor')
@section('title', 'project')
@section('titlebar', 'Edit Proyek Pembangunan')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('project.update' , $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input type="text" class="form-control" name="nama_proyek" required="" value="{{ $data -> nama_proyek}}">
                    </div>
                    <div class="form-group">
                        <label>Koor Proyek</label>
                        <input type="text" class="form-control" name="koor" required="" value="{{ $data -> koor}}">
                    </div>
                    <div class="form-group">
                        <label>Lokasi Proyek</label>
                        <input type="text" class="form-control" name="lokasi" required="" value="{{ $data -> lokasi}}">
                    </div>
                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" class="form-control" name="progress" required="" value="{{ $data -> progress}}">
                    </div>
                    <div class="form-group">
                        <label>Kendala</label>
                        <input type="text" class="form-control" name="kendala" required="" value="{{ $data -> kendala}}">
                    </div>
                </div>

                <div class="card-footer text-right">
                    <a href="{{ route('project.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection