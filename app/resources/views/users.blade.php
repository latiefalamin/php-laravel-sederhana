<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User — Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 30px;
        }
        h1 {
            color: #4f46e5;
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background-color: #f9fafb;
            color: #4b5563;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f9fafb;
        }
        .link-home {
            display: inline-block;
            color: #4f46e5;
            text-decoration: none;
            font-weight: 500;
        }
        .link-home:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        .alert-success {
            background-color: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        .alert-error {
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        .btn-delete {
            display: inline-block;
            background-color: #ef4444;
            color: #fff;
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .btn-delete:hover {
            background-color: #dc2626;
        }
        .btn-disabled {
            display: inline-block;
            background-color: #d1d5db;
            color: #6b7280;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <p>Berikut adalah daftar pengguna yang telah mendaftar di aplikasi ini.</p>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Terdaftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d M Y, H:i') }}</td>
                    <td>
                        @if(Auth::id() == $user->id)
                            <span class="btn-disabled">Anda</span>
                        @else
                            <a href="/users/{{ $user->id }}/delete" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');">Hapus</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/" class="link-home">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
