<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container" style="text-align: center; display: block; align-self: center;">
        <h1>Hello World</h1>
        <p>Selamat datang di aplikasi Laravel sederhana.</p>
        
        <div style="margin-top:20px;">
            @auth
                <p style="margin-bottom: 10px;">Halo, <strong>{{ Auth::user()->name }}</strong>!</p>
                <a href="/users" class="btn-info">Daftar User</a>
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn-danger">Logout</button>
                </form>
            @else
                <a href="/login" class="btn-primary" style="margin-right: 10px;">Login</a>
                <a href="/register" class="btn-success">Daftar Akun</a>
            @endauth
        </div>
    </div>
</body>
</html>
