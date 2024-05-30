<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Daftar Siswa</h1>
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Mata Pelajaran</th>
                                <th>Durasi Berlangganan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->mata_pelajaran }}</td>
                                    <td>{{ $item->durasi_berlangganan }}</td>
                                    <td>
                                        <a href="{{ route('siswa.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($siswa->isEmpty())
                        <p class="text-center">Tidak ada siswa yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
