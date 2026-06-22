<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="form-card">
        <h1>Login Akun</h1>
        <p class="subtitle">Masuk menggunakan email dan password Anda.</p>

        @if($errors->has('email'))
            <div class="alert-error">{{ $errors->first('email') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="nama@email.com"
                    class="{{ $errors->has('email') ? 'error' : '' }}"
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password Anda"
                    class="{{ $errors->has('email') ? 'error' : '' }}"
                >
            </div>

            <button type="submit" class="btn-submit">Login</button>
        </form>

        <a href="/" class="link-home">← Kembali ke halaman utama</a>
        <a href="/register" class="link-home">Belum punya akun? Daftar</a>
    </div>
</body>
</html>
