<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Blog</title>
</head>
<body>
    <h1>Daftar Blog</h1>
    
    @foreach($blogs as $blog)
        <div style="border: 1px solid #ddd; margin-bottom: 15px; padding: 10px;">
            <h2>{{ $blog->judul }}</h2>
            @if($blog->foto)
                <img src="{{ asset('images/' . $blog->foto) }}" alt="{{ $blog->judul }}" style="max-width: 100%; height: auto; margin-bottom: 10px;">
            @endif
            <p>{{ $blog->isi }}</p>
            <p>{{ $blog->tanggal_buat }}</p>
            <p>Author: {{ $blog->pembuat }}</p>
            <a href="/blogs/{{ $blog->id }}/edit">Edit</a>

            <form action="/blogs/{{ $blog->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?')">Hapus</button>
            </form>
        </div>
    @endforeach

    <a href="/blogs/create">Tambah Blog</a>
</body>
</html>
