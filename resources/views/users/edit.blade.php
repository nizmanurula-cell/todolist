<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <!-- Judul halaman -->
    <h1>Edit User</h1>

    <!-- Form untuk mengubah data user -->
    <form action="{{ route('users.update', $user->id) }}" method="POST">

        <!-- Pengaman form Laravel -->
        @csrf

        <!-- Mengubah method POST menjadi PUT untuk proses update -->
        @method('PUT')

        <!-- Input nama -->
        <label>Nama:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <br><br>

        <!-- Input email -->
        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <br><br>

        <!-- Tombol menyimpan perubahan -->
        <button type="submit">Update</button>

    </form>

    <!-- Tombol kembali ke daftar user -->
    <a href="{{ route('users.index') }}">Kembali</a>

</body>
</html>