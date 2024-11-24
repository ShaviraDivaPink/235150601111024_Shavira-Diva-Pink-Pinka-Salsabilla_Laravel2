<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
</head>
<body>
    <h1>Create Blog</h1>
    <form action="/blogs" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" required>
        </div>

        <div>
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" rows="5" required></textarea>
        </div>

        <div>
            <label for="pembuat">Pembuat</label>
            <input type="text" name="pembuat" id="pembuat" required>
        </div>

        <div>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>

        <div>
            <button type="submit">Tambah Blog</button>
        </div>
    </form>

    <a href="/blogs">Kembali ke Daftar Blog</a>
</body>
</html>
