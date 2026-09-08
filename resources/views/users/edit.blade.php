<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8ff;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
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

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .btn-update {
            background-color: #f4a261;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-kembali {
            display: inline-block;
            margin-left: 8px;
            padding: 10px 18px;
            background-color: #ddd;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <label>Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" required>

            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" required>

            <button type="submit" class="btn-update">
                Update
            </button>

            <a href="{{ route('users.index') }}" class="btn-kembali">
                Kembali
            </a>

        </form>

    </div>

</body>
</html>