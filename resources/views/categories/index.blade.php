@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-slate-900">Categorías de Libros</h1>
        <p class="text-slate-500 italic">Explora nuestro catálogo por especialidad académica o tema.</p>
    </div>

    @if($categories->isEmpty())
        <p class="text-slate-500 italic">No hay categorías registradas por el momento.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($categories as $category)
                <a href="{{ route('categories.show', $category) }}" 
                   class="block p-6 rounded-lg shadow-sm hover:shadow-md transition text-white"
                   style="background-color: {{ $category->color ?? '#475569' }}">
                    <div class="flex flex-col justify-between h-28">
                        <h2 class="text-xl font-bold truncate" title="{{ $category->name }}">
                            {{ $category->name }}
                        </h2>
                        <div class="flex items-center justify-between">
                            <span class="text-sm bg-white/20 px-2 py-1 rounded-md font-medium">
                                {{ $category->books_count }} {{ $category->books_count == 1 ? 'libro' : 'libros' }}
                            </span>
                            <span class="text-sm font-semibold">Ver catálogo &rarr;</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $categories->links() }}
        </div>
    @endif
@endsection