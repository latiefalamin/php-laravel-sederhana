<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Tampilkan daftar user.
     */
    public function index()
    {
        if (!Auth::check()) {
            abort(404);
        }

        $users = User::all();
        return view('users', compact('users'));
    }

    /**
     * Menghapus data user.
     */
    public function destroy($id)
    {
        if (!Auth::check()) {
            abort(404);
        }

        if (Auth::id() == $id) {
            return redirect('/users')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('/users')->with('success', 'User berhasil dihapus.');
        }

        return redirect('/users')->with('error', 'User tidak ditemukan.');
    }
}
