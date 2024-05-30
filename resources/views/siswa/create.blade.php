@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Tambah Siswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="mata_pelajaran">Mata Pelajaran:</label>
            <textarea id="mata_pelajaran" name="mata_pelajaran" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="durasi_berlangganan">Durasi Berlangganan:</label>
            <input type="text" id="durasi_berlangganan" name="durasi_berlangganan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
