<form 
    class="md:w-1/2"
    wire:submit.prevent="editarVacante"
>
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Titulo')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo del elemento"
            />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen_nueva" 
            accept="image/*"
            />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />

        <div class="my-5 w-80">
            @if ($imagen_nueva)
                <x-input-label :value="__('Nueva Imagen:')" />
               <div class="border-4 border-gray-700 rounded-lg p-2">
                   <img src="{{ $imagen_nueva->temporaryUrl() }}" alt=""> 
               </div>
            @else
                <x-input-label :value="__('Imagen actual')" />
                <div class="border-4 border-gray-700 rounded-lg p-2">
                    <img src="{{ asset('storage/uploads/' . $imagen ) }}" alt="{{ 'Archivo: ' . $titulo }}">
                </div>
            @endif
        </div>

    </div>

    <div class="flex justify-end mt-8">
        <x-primary-button>
            Guardar cambios
        </x-primary-button>
    </div>

</form>