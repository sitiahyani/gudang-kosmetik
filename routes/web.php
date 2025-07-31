<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminAuth;



// Halaman utama (landing)
Route::get('/', function () {
    return view('landing');
})->name('home');

// Halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login POST
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// ================= ADMIN DASHBOARD =================
Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('admin.dashboard'); // sesuai dengan resources/views/admin/dashboard.blade.php
    })->name('admin.dashboard');
});


// ================= KARYAWAN DASHBOARD =================
Route::middleware(['karyawanauth'])->group(function () {
    Route::get('/dashboard/karyawan', function () {
        return view('karyawan.dashboard'); // buat file ini jika belum ada
    })->name('karyawan.dashboard');
});
