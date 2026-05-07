<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // Trae las categorías ordenadas por nombre, paginadas de 20 en 20 y con el conteo de sus libros relacionados
        $categories = Category::withCount('books')
            ->orderBy('name')
            ->paginate(20);

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        // Carga los libros de esta categoría junto con sus respectivos autores
        $category->load('books.authors');

        return view('categories.show', compact('category'));
    }

    // Los demás métodos (create, store, edit, update, destroy) quedan vacíos por ahora
    public function create() {}
    public function store(Request $request) {}
    public function edit(Category $category) {}
    public function update(Request $request, Category $category) {}
    public function destroy(Category $category) {}
}