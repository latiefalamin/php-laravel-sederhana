<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>Selamat datang di aplikasi Laravel sederhana.</p>
        
        <div style="margin-top:20px;">
            @auth
                <p style="margin-bottom: 10px;">Halo, <strong>{{ Auth::user()->name }}</strong>!</p>
                <a href="/users" style="display:inline-block;margin-right:10px;padding:10px 24px;background:#3b82f6;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;">Daftar User</a>
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="padding:10px 24px;background:#e53e3e;color:#fff;border:none;border-radius:6px;font-weight:600;cursor:pointer;">Logout</button>
                </form>
            @else
                <a href="/login" style="display:inline-block;margin-right:10px;padding:10px 24px;background:#4f46e5;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;">Login</a>
                <a href="/register" style="display:inline-block;padding:10px 24px;background:#10b981;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;">Daftar Akun</a>
            @endauth
        </div>
    </div>
</body>
</html>
