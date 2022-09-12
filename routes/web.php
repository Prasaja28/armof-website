<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KoleksiUserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\KategoriAdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthUserController;
use App\Http\Middleware\DownloadVerif;
use App\Http\Middleware\Authenticate;
use App\Models\Koleksi;
use App\Models\Profil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// USERS *******************************************

Route::get('/', function () {
    return view('users.pages.home');
});
Route::get('/antropometri', function () {
    return view('users.pages.antropometri');
});
Route::get('/koleksi', function () {
    $koleksi = Koleksi::all();
    return view('users.pages.koleksi', compact('koleksi'));
});

Route::get('/loginUser', [AuthUserController::class, 'Loginindex']);
Route::get('/regisUser', [AuthUserController::class, 'Regisindex']);
Route::post('/do-register', [AuthUserController::class, 'doRegister']);
Route::post('/do-login', [AuthUserController::class, 'doLogin']);
Route::get('/logout-cus', [AuthUserController::class, 'Cuslogout']);

//koleksi user
Route::get('/koleksi', [KoleksiUserController::class, 'index'])->name('koleksi');
Route::get('/detail/{id}', [KoleksiUserController::class, 'show']);
Route::get('/search', [KoleksiUserController::class, 'search'])->name('search');
Route::get('/detail/{id}/downloadPDF', [KoleksiUserController::class, 'downloadPDF'])->name('downloadPDF')->middleware('auth:customer');

Route::get('/koleksi-not-found', function () {
    return view('users.pages.koleksi-not-found');
});
Route::get('/usia', function () {
    return view('users.pages.usia');
});
Route::get('/tinggi-berat', function () {
    return view('users.pages.tinggi-berat');
});
Route::get('/tentang-kami', function () {
    $tentang = Profil::all();
    return view('users.pages.tentang-kami', compact('tentang'));
});
Route::get('/fungsi', function () {
    return view('users.pages.fungsi');
});

Route::get('/furnitures', [FrontController::class, 'pageFurniture']);
Route::get('/fungsi/{furnitureid}', [FrontController::class, 'pageFungsi'])->name('pFungsi');
Route::get('/usia/{fungsiid}', [FrontController::class, 'pageUsia'])->name('pUsia');
Route::get('/tinggi-berat', [FrontController::class, 'pageTinggiBerat'])->name('pTinggiBerat');
Route::get('/rekomendasi', [FrontController::class, 'pageRekomendasi'])->name('pResultRekomendasi');

// ADMIN ********************************************

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
});

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);

//Customer
Route::get('/customer-admin', [AuthUserController::class, 'Customerindex']);

//Koleksi
Route::get('/koleksi-admin', [KoleksiController::class, 'index']);
Route::post('/koleksi-admin/store', [KoleksiController::class, 'store']);
Route::put('/koleksi-admin/update-koleksi/{id}', [KoleksiController::class, 'update']);
Route::get('/koleksi-admin/delete-koleksi/{id}', [KoleksiController::class, 'destroy']);

//Profil
Route::get('/admin-profil', [ProfilController::class, 'index']);
Route::post('/admin-profil/store', [ProfilController::class, 'store']);
Route::post('/admin-profil/update-profil/{id}', [ProfilController::class, 'update']);
Route::get('/admin-profil/delete-profil/{id}', [ProfilController::class, 'destroy']);

//settings social media
Route::get('/setting-socialmedia', [SettingsController::class, 'index']);
Route::put('/setting-socialmedia/update/{id}', [SettingsController::class, 'update']);

//Kategori Furniture
Route::get('/kategori-furniture', [KategoriAdminController::class, 'indexFurniture']);
Route::get('/kategori-fungsi', [KategoriAdminController::class, 'indexFungsi']);
Route::post('/kategori-furniture/store', [KategoriAdminController::class, 'storeFurniture']);
Route::post('/kategori-fungsi/store', [KategoriAdminController::class, 'storeFungsi']);
Route::put('/kategori-furniture/update/{id}', [KategoriAdminController::class, 'updateFurniture']);
Route::put('/kategori-fungsi/update/{id}', [KategoriAdminController::class, 'updateFungsi']);
Route::get('/kategori-furniture/delete/{id}', [KategoriAdminController::class, 'destroyFurniture']);
Route::get('/kategori-fungsi/delete/{id}', [KategoriAdminController::class, 'destroyFungsi']);

//Akun
Route::get('/admin-akun', [UsersController::class, 'index']);
Route::get('/admin-akun/delete/{id}', [UsersController::class, 'destroy']);
Route::put('/admin-akun/update/{id}', [UsersController::class, 'update']);
Route::post('/admin-akun/store', [UsersController::class, 'store']);
