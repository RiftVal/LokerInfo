<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lowongan Pekerjaan</title>
</head>
<body>
    <h1>Daftar Lowongan Pekerjaan</h1>
    <a href="{{ route('admin.jobs.create') }}">Tambah Lowongan</a>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Perusahaan</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($jobs as $job)
        <tr>
            <td>{{ $job->id }}</td>
            <td>{{ $job->title }}</td>
            <td>{{ $job->company }}</td>
            <td>{{ $job->description }}</td>
            <td>
                <a href="{{ route('admin.jobs.edit', $job) }}">Edit</a>
                <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>