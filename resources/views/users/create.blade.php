<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>

    <!-- Judul halaman -->
    <h1>Tambah User</h1>

    <!-- Form untuk mengirim data user baru -->
    <form action="{{ route('users.store') }}" method="POST">

        <!-- Pengaman form Laravel -->
        @csrf

        <!-- Input nama -->
        <label>Nama:</label>
        <input type="text" name="name" required>

        <br><br>

        <!-- Input email -->
        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <!-- Input password -->
        <label>Password:</label>
        <input type="password" name="password" required>

        <br><br>

        <!-- Tombol menyimpan data -->
        <button type="submit">Simpan</button>

    </form>

    <!-- Tombol kembali ke daftar user -->
    <a href="{{ route('users.index') }}">Kembali</a>

</body>
</html>