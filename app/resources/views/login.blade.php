<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .form-card {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px;
        }
        .form-card h1 {
            font-size: 1.8rem;
            color: #4f46e5;
            margin-bottom: 8px;
        }
        .form-card p.subtitle {
            color: #888;
            margin-bottom: 24px;
            font-size: 0.95rem;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 6px;
        }
        .form-group input {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid #ddd;
            border-radius: 6px;
            font-size: 0.95rem;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }
        .form-group input:focus {
            outline: none;
            border-color: #4f46e5;
        }
        .form-group input.error {
            border-color: #e53e3e;
        }
        .error-msg {
            color: #e53e3e;
            font-size: 0.8rem;
            margin-top: 4px;
        }
        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #4f46e5;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-submit:hover {
            background-color: #4338ca;
        }
        .link-home {
            display: block;
            text-align: center;
            margin-top: 16px;
            color: #4f46e5;
            font-size: 0.9rem;
            text-decoration: none;
        }
        .link-home:hover {
            text-decoration: underline;
        }
        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            border-radius: 6px;
            padding: 12px 16px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
    </style>
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
