@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Detail Mata Pelajaran
                </div>
                <div class="float-end">
                    <a href="{{ route('subjects.index') }}" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">{{ $subject->name }}</p>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start">Deskripsi</label>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">{{ $subject->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
