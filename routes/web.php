<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriesController;
use App\Models\Member;

// Redirección de la raíz al catálogo de libros
Route::redirect('/', '/books');

// Rutas RESTful para libros y autores
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('categories', CategoriesController::class);
Route::get('/miembros', function () {
    // Obtenemos los primeros 10 miembros con su usuario relacionado
    $members = Member::with('user')->take(10)->get();
    return view('temp-members', compact('members'));
});