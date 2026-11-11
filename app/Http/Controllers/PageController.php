<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50'
        ]);

        return redirect()->route('dashboard', [
            'username' => $request->username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengguna');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        $daftarBuku = [
            ['judul' => 'Laut Bercerita', 'penulis' => 'Leila S. Chudori'],
            ['judul' => 'Home Sweet Loan', 'penulis' => 'Almira Bastari'],
            ['judul' => 'Seporsi Mie Ayam Sebelum Mati', 'penulis' => 'Brian Khrisna']
        ];

        return view('pengelolaan', compact('daftarBuku'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengguna');
        return view('profile', compact('username'));
    }
}