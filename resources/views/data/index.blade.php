@section('titulo_pagina')
    Listado | Datos
@endsection
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Elementos') }}
                </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1>Info recibida</h1>

        
           @foreach ($data as $item)
               <p>{{ $item->codigo_pieza }}</p>
           @endforeach

            
        </div>
    </div>
</x-app-layout>
