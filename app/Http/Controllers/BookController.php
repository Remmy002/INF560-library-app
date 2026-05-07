<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['category', 'authors'])
            ->latest()
            ->paginate(12);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $authors = Author::orderBy('last_name')->get();
        return view('books.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        // Pendiente para Guía 7
    }

    public function show(Book $book)
    {
        // Asegúrate de tener estas relaciones en tu modelo Book
        $book->load(['authors', 'category', 'activeLoans.member.user']);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book) { }
    public function update(Request $request, Book $book) { }
    public function destroy(Book $book) { }
}