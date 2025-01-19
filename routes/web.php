<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloController::class, 'index'])->name('Hallo'); // Rute untuk menampilkan data siswa
Route::get('/create', [HelloController::class, 'create'])->name('create'); // Rute untuk menampilkan form tambah data
Route::post('/store', [HelloController::class, 'store'])->name('store'); // Rute untuk menyimpan data siswa
Route::get('/edit/{id}', [HelloController::class, 'edit'])->name('edit'); // Rute untuk menampilkan form edit
Route::delete('/delete/{id}', [HelloController::class, 'destroy'])->name('delete'); // Rute untuk menghapus data siswa
Route::put('/update/{id}', [HelloController::class, 'update'])->name('update'); // Rute untuk mengupdate data siswa
Route::get('/detail/{id}', [HelloController::class, 'show'])->name('detail'); // Rute untuk menampilkan detail data siswa

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','verified');
