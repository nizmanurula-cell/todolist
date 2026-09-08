<!DOCTYPE html>
<html>
<head>
    <title>Detail User</title>

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

        .data {
            margin-bottom: 18px;
        }

        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .value {
            color: #555;
        }

        .btn-kembali {
            display: inline-block;
            margin-top: 10px;
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

        <h1>Detail User</h1>

        <!-- Nama user -->
        <div class="data">
            <span class="label">Nama</span>
            <span class="value">{{ $user->name }}</span>
        </div>

        <!-- Email user -->
        <div class="data">
            <span class="label">Email</span>
            <span class="value">{{ $user->email }}</span>
        </div>

        <!-- Tombol kembali -->
        <a href="{{ route('users.index') }}" class="btn-kembali">
            Kembali
        </a>

    </div>

</body>
</html>