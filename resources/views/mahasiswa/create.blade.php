<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Mahasiswa</h1>

    <form action="/mahasiswa" method="POST">
        @csrf

        <label>NIM:</label>
        <input type="text" name="nim" required>
        <br><br>

        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br><br>

        <label>Jurusan:</label>
        <select name="jurusan" required>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
        </select>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="/mahasiswa">Kembali ke Daftar Mahasiswa</a>
</body>
</html>