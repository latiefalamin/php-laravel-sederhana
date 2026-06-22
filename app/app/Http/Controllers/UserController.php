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
        $users = User::all();
        return view('users', compact('users'));
    }

    public function destroy($id)
    {
        if (Auth::id() == $id) {
            return redirect()->back()->withErrors(['error' => 'Anda tidak bisa menghapus diri sendiri.']);
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }
}
