<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lowongan Pekerjaan</title>
</head>
<body>
    <div class="container">
        <h1>Edit Lowongan Pekerjaan</h1>
        
        <form action="{{ route('admin.jobs.update', $job) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Judul:</label>
                <input type="text" name="title" id="title" value="{{ $job->title }}" required>
            </div>
            <div>
                <label for="company">Perusahaan:</label>
                <input type="text" name="company" id="company" value="{{ $job->company }}" required>
            </div>
            <div>
                <label for="description">Deskripsi:</label>
                <textarea name="description"
                <textarea name="description" id="description" required>{{ $job->description }}</textarea>
            </div>
            <button type="submit">Perbarui</button>
        </form>
        
        <a href="{{ route('admin.jobs.index') }}">Kembali</a>
    </div>
</body>
</html