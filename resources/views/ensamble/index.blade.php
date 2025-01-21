@section('titulo_pagina')
    Listado | Ensamble
@endsection
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Elementos') }}
                </h2>

                <div class="flex gap-1">
                    <a href="{{ route('ensamble.show') }}" class="p-3 bg-indigo-500 text-white text-sm font-bold">
                        {{ __('Ver carrusel') }}
                    </a>
                    <a href="{{ route('ensamble.create') }}" class="p-3 bg-slate-900 text-white text-sm font-bold">
                        {{ __('Agregar elemento') }}
                    </a>
                </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
                <div class="border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                    {{ session('mensaje') }}
                </div>
            @endif

            <livewire:show-ensamble />
            
        </div>
    </div>
</x-app-layout>
