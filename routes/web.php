<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('buah.index');
});
//Bagian data buah
Route::get('/indexBuah',[BuahController::class , 'index'])->name('page-buah');
Route::get('/createBuah', [BuahController::class, 'create'])->name('create');
Route::post('/simpan/data', [BuahController::class, 'store'])->name('simpan-data');
Route::get('/delete/{id}', [BuahController::class, 'destroy'])->name('delete');
Route::put('/buah/{id}', [BuahController::class, 'update'])->name('buah.update');
Route::get('buah/{id}/edit', [BuahController::class, 'edit'])->name('buah-edit');
//Bagian akun
Route::get('/pageAkun', [UserController::class, 'index'])->name('page-akun');
Route::get('/create', [UserController::class, 'create'])->name('create-akun');
Route::post('/simpanAkun', [UserController::class, 'store'])->name('simpan-akun');
