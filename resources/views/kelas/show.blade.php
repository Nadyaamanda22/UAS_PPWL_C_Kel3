<!DOCTYPE html>
<html>
<head>
    <title>Detail Kelas</title>
</head>
<body>
    <h1>Detail Kelas</h1>
    <p>Nama Kelas: {{ $kelas->nama_kelas }}</p>
    <p>Deskripsi: {{ $kelas->deskripsi }}</p>
    <a href="{{ route('kelas') }}">Kembali</a>
</body>
</html>
