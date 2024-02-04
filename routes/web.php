<?php

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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::get('/datasiswa',[SiswaController::class,'index'])->name('siswa.index');
Route::get('/datasiswa-tambah',[SiswaController::class,'create'])->name('siswa.create');
Route::get('/datasiswa-edit',[SiswaController::class,'edit'])->name('siswa.edit');

Route::get('/datakelas',[KelasController::class,'index'])->name('kelas.index');
Route::get('/datakelas-tambah',[KelasController::class,'create'])->name('kelas.create');
Route::get('/datakelas-edit',[KelasController::class,'edit'])->name('kelas.edit');

Route::get('/datausers',[UsersController::class,'index'])->name('users.index');
Route::get('/datausers-tambah',[UsersController::class,'create'])->name('users.create');
Route::get('/datausers-edit',[UsersController::class,'edit'])->name('users.edit');

Route::get('/dataobat',[ObatController::class,'index'])->name('obat.index');
Route::get('/dataobat-tambah',[ObatController::class,'create'])->name('obat.create');
Route::get('/dataobat-edit',[ObatController::class,'edit'])->name('obat.edit');

Route::get('/rekam',[RekamController::class,'index'])->name('rekam.index');
Route::get('/rekam-tambah',[RekamController::class,'create'])->name('rekam.create');
Route::get('/rekam-edit',[RekamController::class,'edit'])->name('rekam.edit');