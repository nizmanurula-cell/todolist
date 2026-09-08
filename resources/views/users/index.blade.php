<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8ff;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        .btn-tambah {
            display: inline-block;
            background-color: #6c8cff;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .btn-tambah:hover {
            background-color: #5575e8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #eef2ff;
        }

        .btn {
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 6px;
            color: white;
            font-size: 14px;
        }

        .detail {
            background-color: #5aa9e6;
        }

        .edit {
            background-color: #f4a261;
        }

        .hapus {
            background-color: #e76f51;
            border: none;
            padding: 7px 12px;
            border-radius: 6px;
            color: white;
            cursor: pointer;
        }

        .hapus:hover {
            background-color: #d85d40;
        }

        form {
            display: inline;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Daftar User</h1>

        <!-- Tombol tambah user -->
        <a href="{{ route('users.create') }}" class="btn-tambah">
            + Tambah User
        </a>

        <!-- Tabel daftar user -->
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>

                        <td>{{ $user->email }}</td>

                        <td>
                            <!-- Detail -->
                            <a href="{{ route('users.show', $user->id) }}"
                               class="btn detail">
                                Detail
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('users.edit', $user->id) }}"
                               class="btn edit">
                                Edit
                            </a>

                            <!-- Hapus -->
                            <form action="{{ route('users.destroy', $user->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="hapus">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>