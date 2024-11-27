<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('categorias', [CategoriaController::class, 'index'])->middleware(['auth', 'verified'])->name('index-categorias');
Route::get('categorias/create', [CategoriaController::class, 'create'])->middleware(['auth', 'verified'])->name('create-categorias');
Route::post('categorias', [CategoriaController::class, 'store'])->middleware(['auth', 'verified'])->name('store-categorias');
Route::get('categorias/{id}/edit', [CategoriaController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-categorias');
Route::put('categorias/{id}', [CategoriaController::class, 'update'])->middleware(['auth', 'verified'])->name('update-categorias');
Route::delete('categorias/{id}', [CategoriaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-categorias');

Route::get('produtos', [FornecedorController::class, 'index'])->middleware(['auth', 'verified'])->name('index-produtos');
Route::get('produtos/create', [FornecedorController::class, 'create'])->middleware(['auth', 'verified'])->name('create-produtos');
Route::post('produtos', [FornecedorController::class, 'store'])->middleware(['auth', 'verified'])->name('store-produtos');
Route::get('produtos/{id}/edit', [FornecedorController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-produtos');
Route::put('produtos/{id}', [FornecedorController::class, 'update'])->middleware(['auth', 'verified'])->name('update-produtos');
Route::delete('produtos/{id}', [FornecedorController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-produtos');

Route::get('produtos', [ProdutoController::class, 'index'])->middleware(['auth', 'verified'])->name('index-produtos');
Route::get('produtos/create', [ProdutoController::class, 'create'])->middleware(['auth', 'verified'])->name('create-produtos');
Route::post('produtos', [ProdutoController::class, 'store'])->middleware(['auth', 'verified'])->name('store-produtos');
Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-produtos');
Route::put('produtos/{id}', [ProdutoController::class, 'update'])->middleware(['auth', 'verified'])->name('update-produtos');
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-produtos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
