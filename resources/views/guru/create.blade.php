<!DOCTYPE html>
<html>
<head>
    <title>Tambah Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Guru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_guru">Nama Lengkap:</label>
                <input type="text" id="nama_guru" name="nama_guru" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="mata_pelajaran">Mata Pelajaran yang Diampu:</label>
                <textarea id="mata_pelajaran" name="mata_pelajaran" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="jumlah_kelas">Jumlah Kelas yang Diambil:</label>
                <input type="number" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="{{ route('guru.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>