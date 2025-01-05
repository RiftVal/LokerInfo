<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lowongan Pekerjaan</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Lowongan Pekerjaan</h1>
        
        <form action="{{ route('admin.jobs.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Judul:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="company">Perusahaan:</label>
                <input type="text" name="company" id="company" required>
            </div>
            <div>
                <label for="description">Deskripsi:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <button type="submit">Simpan</button>
        </form>
        
        <a href="{{ route('admin.jobs.index') }}">Kembali</a>
    </div>
</body>
</html>