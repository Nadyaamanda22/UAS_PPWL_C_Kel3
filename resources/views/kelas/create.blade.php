<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Kelas</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kelas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas:</label>
                <input type="text" id="nama_kelas" name="nama_kelas" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="{{ route('kelas') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>