<!DOCTYPE html>
<html>
<head>
    <title>Detail Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Guru</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Lengkap: {{ $guru->nama_guru }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $guru->email }}</p>
                <p class="card-text"><strong>Mata Pelajaran yang Diampu:</strong> {{ $guru->mata_pelajaran }}</p>
                <p class="card-text"><strong>Jumlah Kelas yang Diambil:</strong> {{ $guru->jumlah_kelas }}</p>
                <a href="{{ route('guru.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
