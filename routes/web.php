<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\AntropometriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\KategoriAdminController;
use App\Http\Controllers\UsersController;

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
    return view('users.pages.koleksi');
});
Route::get('/rekomendasi', function () {
    return view('users.pages.rekomendasi');
});
Route::get('/usia', function () {
    return view('users.pages.usia');
});
Route::get('/tinggi-berat', function () {
    return view('users.pages.tinggi-berat');
});
Route::get('/tentang-kami', function () {
    return view('users.pages.tentang-kami');
});
Route::get('/detail', function () {
    return view('users.pages.detail');
});
Route::get('/fungsi', function () {
    return view('users.pages.fungsi');
});
Route::get('/furnitures', function () {
    return view('users.pages.furnitures');
});

// ADMIN ********************************************

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
});

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);

//Koleksi
Route::get('/koleksi-admin', [KoleksiController::class, 'index']);
Route::post('/koleksi-admin/store', [KoleksiController::class, 'store']);
Route::get('/koleksi-admin/delete-koleksi/{id}', [KoleksiController::class, 'destroy']);

//Antopometri
Route::get('/antropometri-admin', [AntropometriController::class, 'index']);
Route::post('/antropometri-admin/store', [AntropometriController::class, 'store']);
Route::get('/antropometri-admin/delete/{id}', [AntropometriController::class, 'destroy']);

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
Route::post('/kategori-furniture/update/{id}', [KategoriAdminController::class, 'updateFurniture']);
Route::post('/kategori-fungsi/update/{id}', [KategoriAdminController::class, 'updateFungsi']);
Route::get('/kategori-furniture/delete/{id}', [KategoriAdminController::class, 'destroyFurniture']);
Route::get('/kategori-fungsi/delete/{id}', [KategoriAdminController::class, 'destroyFungsi']);

//Akun
Route::get('/admin-akun', [UsersController::class, 'index']);
Route::get('/admin-akun/delete/{id}', [UsersController::class, 'destroy']);
Route::put('/admin-akun/update/{id}', [UsersController::class, 'update']);
Route::post('/admin-akun/store', [UsersController::class, 'store']);
