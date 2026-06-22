<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User — Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <p>Berikut adalah daftar pengguna yang telah mendaftar di aplikasi ini.</p>
        
        @if($errors->has('error'))
            <div class="alert-error">{{ $errors->first('error') }}</div>
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
                            <button class="btn-disabled" disabled>Hapus</button>
                        @else
                            <a href="/users/{{ $user->id }}/delete" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
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
