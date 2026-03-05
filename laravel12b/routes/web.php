<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('admin.detail');
});
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/', function () {
    return view('home');
})->name('home');