@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Siswa
                </div>
                <div class="float-end">
                    <a href="{{ route('siswa.index') }}" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}">
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $siswa->email) }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="mata_pelajaran" class="col-md-4 col-form-label text-md-end text-start">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror" id="mata_pelajaran" name="mata_pelajaran" value="{{ old('mata_pelajaran', $siswa->mata_pelajaran) }}">
                            @if ($errors->has('mata_pelajaran'))
                                <span class="text-danger">{{ $errors->first('mata_pelajaran') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="durasi_berlangganan" class="col-md-4 col-form-label text-md-end text-start">Durasi Berlangganan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('durasi_berlangganan') is-invalid @enderror" id="durasi_berlangganan" name="durasi_berlangganan" value="{{ old('durasi_berlangganan', $siswa->durasi_berlangganan) }}">
                            @if ($errors->has('durasi_berlangganan'))
                                <span class="text-danger">{{ $errors->first('durasi_berlangganan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Siswa">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
