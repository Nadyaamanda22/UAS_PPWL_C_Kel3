<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Daftar Guru</h1>
                    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Mata Pelajaran yang Diampu</th>
                                <th>Jumlah Kelas yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $guru)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $guru->nama_guru }}</td>
                                    <td>{{ $guru->email }}</td>
                                    <td>{{ $guru->mata_pelajaran }}</td>
                                    <td>{{ $guru->jumlah_kelas }}</td>
                                    <td>
                                        <a href="{{ route('guru.show', $guru->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus guru ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($gurus->isEmpty())
                        <p class="text-center">Tidak ada guru yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
