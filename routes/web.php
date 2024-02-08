<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login/post',[AuthController::class,'login'])->name('login.post');

Route::get('/',[DashboardController::class,'index'])->name('dashboard.index')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/datasiswa',[SiswaController::class,'index'])->name('siswa.index');
    Route::get('/datasiswa-tambah',[SiswaController::class,'create'])->name('siswa.create');
    Route::get('/datasiswa-edit/{id}',[SiswaController::class,'edit'])->name('siswa.edit');
    Route::post('/datasiswa-store',[SiswaController::class,'store'])->name('siswa.store');
    Route::put('/datasiswa-update/{id}',[SiswaController::class,'update'])->name('siswa.update');
    Route::delete('/datasiswa-destroy/{id}',[SiswaController::class,'destroy'])->name('siswa.destroy');

    Route::get('/datakelas',[KelasController::class,'index'])->name('kelas.index');
    Route::get('/datakelas-tambah',[KelasController::class,'create'])->name('kelas.create');
    Route::post('/datakelas-tambah/store',[KelasController::class,'store'])->name('kelas.store');
    Route::put('/datakelas-update/update/{id}',[KelasController::class,'update'])->name('kelas.update');
    Route::delete('/datakelas-delete/delete/{id}',[KelasController::class,'destroy'])->name('kelas.destroy');
    Route::get('/datakelas-edit/{id}',[KelasController::class,'edit'])->name('kelas.edit');

    Route::get('/datausers',[UsersController::class,'index'])->name('users.index');
    Route::get('/datausers-tambah',[UsersController::class,'create'])->name('users.create');
    Route::get('/datausers-edit/{id}',[UsersController::class,'edit'])->name('users.edit');
    Route::post('/datausers-store',[UsersController::class,'store'])->name('users.store');
    Route::put('/datausers-update/{id}',[UsersController::class,'update'])->name('users.update');
    Route::delete('/datausers-destroy/{id}',[UsersController::class,'destroy'])->name('users.destroy');
    Route::get('/datausers-changepassword/{id}',[UsersController::class,'changepassword'])->name('users.changepassword');

    Route::get('/dataobat',[ObatController::class,'index'])->name('obat.index');
    Route::get('/dataobat-tambah',[ObatController::class,'create'])->name('obat.create');
    Route::get('/dataobat-edit/{id}',[ObatController::class,'edit'])->name('obat.edit');
    Route::post('/dataobat-store',[ObatController::class,'store'])->name('obat.store');
    Route::put('/dataobat-update/{id}',[ObatController::class,'update'])->name('obat.update');
    Route::delete('/dataobat-destroy/{id}',[ObatController::class,'destroy'])->name('obat.destroy');

    Route::get('/rekam',[RekamController::class,'index'])->name('rekam.index');
    Route::get('/rekam-tambah',[RekamController::class,'create'])->name('rekam.create');
    Route::get('/rekam-edit',[RekamController::class,'edit'])->name('rekam.edit');
    Route::post('/rekam-store',[RekamController::class,'store'])->name('rekam.store');
    Route::get('/rekam-edit/{id}',[RekamController::class,'edit'])->name('rekam.edit');
    Route::put('/rekam-update/{id}',[RekamController::class,'update'])->name('rekam.update');
    Route::delete('/rekam-destroy/{id}',[RekamController::class,'destroy'])->name('rekam.destroy');

});
