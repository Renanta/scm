@extends('layouts.contractor')
@section('title', 'project')
@section('titlebar', 'Tambah Proyek Pembangunan')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('project.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input type="text" class="form-control" name="nama_proyek" required="">
                    </div>
                    <div class="form-group">
                        <label>Koor Proyek</label>
                        <input type="text" class="form-control" name="koor" required="">
                    </div>
                    <div class="form-group">
                        <label>Lokasi Proyek</label>
                        <input type="text" class="form-control" name="lokasi" required="">
                    </div>
                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" class="form-control" name="progress" required="">
                    </div>
                    <div class="form-group">
                        <label>Kendala</label>
                        <input type="text" class="form-control" name="kendala" required="">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('project.index') }}" class="btn btn-warning">Kembali</a>
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection