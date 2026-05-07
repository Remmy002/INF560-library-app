@extends('layouts.app')

@section('title', 'Prueba de Miembros')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-slate-900 mb-6">Lista de Miembros (Prueba de Badge)</h1>
        
        <div class="bg-white shadow-sm rounded-lg overflow-hidden border border-slate-200">
            <table class="w-full">
                <thead class="bg-slate-900 text-white text-left text-sm">
                    <tr>
                        <th class="px-6 py-3">Nombre</th>
                        <th class="px-6 py-3 text-right">Tipo de Membresía</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($members as $member)
                        <tr>
                            <td class="px-6 py-4 font-medium text-slate-900">
                                {{ $member->user->name ?? 'Usuario sin nombre' }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <x-membership-badge :type="$member->membership_type" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-4 text-center text-slate-500 italic">
                                No hay miembros cargados en la base de datos. Ejecuta los seeders.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection