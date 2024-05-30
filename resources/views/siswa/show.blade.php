@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Siswa</h1>
        <div class="card">
            <div class="card-header">
                {{ $siswa->nama }}
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
                <p><strong>Email:</strong> {{ $siswa->email }}</p>
                <p><strong>Mata Pelajaran:</strong> {{ $siswa->mata_pelajaran }}</p>
                <p><strong>Durasi Berlangganan:</strong> {{ $siswa->durasi_berlangganan }}</p>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endsection
