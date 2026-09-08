<!DOCTYPE html>
<html>
<head>
    <title>Detail User</title>
</head>
<body>

    <!-- Judul halaman -->
    <h1>Detail User</h1>

    <!-- Menampilkan nama user -->
    <p>
        <strong>Nama:</strong> {{ $user->name }}
    </p>

    <!-- Menampilkan email user -->
    <p>
        <strong>Email:</strong> {{ $user->email }}
    </p>

    <!-- Tombol kembali ke daftar user -->
    <a href="{{ route('users.index') }}">Kembali</a>

</body>
</html>