<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// Rutas de recursos para cada controlador

Route::resource('/usuario', UsuarioController::class)->middleware(['auth', 'verified']);
Route::resource('/autor', AutorController::class)->middleware(['auth', 'verified']);
Route::resource('/categoria', CategoriaController::class)->middleware(['auth', 'verified']);
Route::resource('/editorial', EditorialController::class)->middleware(['auth', 'verified']);
Route::resource('/libro', LibroController::class)->middleware(['auth', 'verified']);
Route::resource('/prestamo', PrestamoController::class)->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
