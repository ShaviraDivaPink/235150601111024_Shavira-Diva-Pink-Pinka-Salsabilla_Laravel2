<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
</head>
<body>
    <h1>Edit Blog</h1>

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $blog->judul }}" required>
        </div>

        <div>
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" rows="5" required>{{ $blog->isi }}</textarea>
        </div>

        <div>
            <label for="pembuat">Pembuat</label>
            <input type="text" name="pembuat" id="pembuat" value="{{ $blog->pembuat }}" required>
        </div>

        <div>
        <label for="foto">Upload Foto:</label>
        <input type="file" name="foto" accept="image/*"><br>
        </div>

        @if($blog->foto)
        <p>Foto saat ini:</p>
        <img src="{{ asset('images/' . $blog->foto) }}" alt="{{ $blog->judul }}" style="max-width: 100px; height: auto;">
        @endif

        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="/blogs/list">Kembali ke Daftar Blog</a>
</body>
</html>
