<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>
</head>
<body>
    <h1>Edit Kelas</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_kelas">Nama Kelas:</label><br>
        <input type="text" id="nama_kelas" name="nama_kelas" value="{{ $kelas->nama_kelas }}"><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi">{{ $kelas->deskripsi }}</textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
    <a href="{{ route('kelas') }}">Kembali</a>
</body>
</html>
