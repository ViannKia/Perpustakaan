<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('layouts.login.index');
    }

    // Proses login
    public function login_proses(Request $request)
    {
        // Validasi input
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            // Jika proses login berhasil, ambil nama admin dan simpan ke dalam sesi
            $admin = Auth::user();
            $request->session()->regenerate();
            $request->session()->put('nama_admin', $admin->name);
            return redirect('/dashboard')->with('success', 'Successfully Log in');
        } else {
            // Jika proses login gagal, kembali ke halaman login dengan pesan kesalahan
            return back()->with('error', "Username or Password is Invalid");
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Successfully Log Out');
    }
}
