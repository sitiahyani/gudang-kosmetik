<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Login gabungan (admin / karyawan)
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:admin,karyawan',
        ]);

        if ($request->role === 'admin') {
            $admin = Admin::where('username', $request->username)->first();
            if ($admin && Hash::check($request->password, $admin->password)) {
                session(['admin' => $admin]);
                return redirect('/dashboard/admin');
            }
        } elseif ($request->role === 'karyawan') {
            $karyawan = Karyawan::where('username', $request->username)->first();
            if ($karyawan && Hash::check($request->password, $karyawan->password)) {
                session(['karyawan' => $karyawan]);
                return redirect('/dashboard/karyawan');
            }
        }

        return back()->with('error', 'Login gagal. Username atau password salah.');
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}