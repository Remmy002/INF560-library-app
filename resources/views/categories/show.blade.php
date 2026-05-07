@extends('layouts.app')

@section('title', 'Categoría: ' . $category->name)

@section('content')
    <a href="{{ route('categories.index') }}" class="text-sm text-slate-600 hover:text-slate-900 mb-4 inline-block">
        &larr; Volver a categorías
    </a>

    <div class="flex items-center gap-4 mb-8">
        <div class="w-6 h-6 rounded-full" style="background-color: {{ $category->color ?? '#475569' }}"></div>
        <h1 class="text-3xl font-bold text-slate-900">Libros en "{{ $category->name }}"</h1>
    </div>

    @if($category->books->isEmpty())
        <p class="text-slate-500 italic">No hay libros registrados en esta categoría todavía.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($category->books as $book)
                <x-book-card :book="$book" />
            @endforeach
        </div>
    @endif
@endsection