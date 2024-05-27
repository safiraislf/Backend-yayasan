<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//SISWA agus2@gmail.com pass 123456
Route::get('/loginawal', [RegisterController::class, 'loginawal'])->name('loginawal');
Route::post('/loginawal-proses', [RegisterController::class, 'loginawal_proses'])->name('loginawal-proses');
Route::get('/logoutuser', [RegisterController::class, 'logoutuser'])->name('logoutuser');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register-proses', [RegisterController::class, 'register_proses'])->name('register-proses');

Route::group(['prefix' => 'acc', 'middleware' => ['auth'], 'as' => 'acc.'], function () {
    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::get('/token', [UserController::class, 'token'])->name('token');

    Route::post('/setor', [UserController::class, 'setor'])->name('setor');

    Route::get('/infaq', [UserController::class, 'infaq'])->name('infaq');
    Route::post('/stor', [UserController::class, 'stor'])->name('stor');
    Route::get('/sosialisasi', [UserController::class, 'sosialisasi'])->name('sosialisasi');
    Route::get('/daftar', [UserController::class, 'daftar'])->name('daftar');

    Route::get('/daftar',[UserController::class, 'daftar'])->name('daftar');
    Route::post('/stores', [UserController::class, 'stores'])->name('stores');

    Route::get('/observasi',[UserController::class, 'observasi'])->name('observasi');
});


// ADMIN safiraindala3@gmail.com pass 123456

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logoutadmin', [LoginController::class, 'logoutadmin'])->name('logoutadmin');

Route::group(['prefix' => 'min', 'middleware' => ['auth'], 'as' => 'min.'], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    Route::get('/alluser', [AdminController::class, 'alluser'])->name('alluser');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

    Route::get('/datatoken', [AdminController::class, 'datatoken'])->name('datatoken');
    Route::post('/confirm', [AdminController::class, 'confirm'])->name('confirm');
    Route::delete('/remove/{id}', [AdminController::class, 'remove'])->name('remove');

    Route::get('/datainfaq', [AdminController::class, 'datainfaq'])->name('datainfaq');
    Route::delete('/hapus/{id}', [AdminController::class, 'hapus'])->name('hapus');
    Route::post('/konfirmasi', [AdminController::class, 'konfirmasi'])->name('konfirmasi');

    Route::get('/datadaftar', [AdminController::class, 'datadaftar'])->name('datadaftar');
    Route::get('/createjadwal', [AdminController::class, 'createjadwal'])->name('createjadwal');
    Route::get('updatejadwal', [AdminController::class, 'updatejadwal'])->name('updatejadwal');
    Route::post('/storer', [AdminController::class, 'storer'])->name('storer');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');

    Route::get('/dataobs', [AdminController::class, 'dataobs'])->name('dataobs');


});
