<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>

    <!-- Judul halaman -->
    <h1>Daftar User</h1>

    <!-- Tombol untuk menuju halaman tambah user -->
    <a href="{{ route('users.create') }}">Tambah User</a>

    <!-- Menampilkan semua data user -->
    <ul>
        @foreach ($users as $user)
            <li>
                <!-- Menampilkan nama dan email user -->
                {{ $user->name }} - {{ $user->email }}

                <!-- Tombol untuk melihat detail user -->
                <a href="{{ route('users.show', $user->id) }}">Detail</a>

                <!-- Tombol untuk mengedit user -->
                <a href="{{ route('users.edit', $user->id) }}">Edit</a>

                <!-- Form untuk menghapus user -->
                <form action="{{ route('users.destroy', $user->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>