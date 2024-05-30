<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Daftar Kelas</h1>
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $kelasItem)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kelasItem->nama_kelas }}</td>
                                    <td>{{ $kelasItem->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('kelas.show', $kelasItem->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('kelas.edit', $kelasItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kelas.destroy', $kelasItem->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kelas ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($kelas->isEmpty())
                        <p class="text-center">Tidak ada kelas yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
