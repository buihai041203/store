<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            padding: 40px;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        button {
            padding: 12px 20px;
            background: crimson;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: darkred;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Đăng nhập thành công 🎉</h1>
    <p>Xin chào, <strong>{{ session('name') }}</strong></p>
    <p>Email: <strong>{{ session('email') }}</strong></p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
</div>

</body>
</html>