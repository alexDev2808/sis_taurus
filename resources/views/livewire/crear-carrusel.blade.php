<form 
    class="md:w-1/2"
    wire:submit.prevent="subirConf"
>
    <div class="mt-4">
        <x-input-label for="nombre" :value="__('Titulo del carrusel')" />
        <x-text-input 
            id="nombre" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="nombre" 
            :value="old('nombre')" 
            placeholder="Titulo del elemento"
            />
        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="desc" :value="__('Descripcion del carrusel')" />
        <x-text-input 
            id="desc" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="desc" 
            :value="old('desc')" 
            placeholder="Ej. Carrusel con informacion del OEE (Looker Studio)"
            />
        <x-input-error :messages="$errors->get('desc')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="tiempo" :value="__('Tiempo(mins) para cambio automático en el carrusel')" />
        <x-text-input 
            id="tiempo" 
            class="block mt-1 w-full" 
            type="number" 
            wire:model="tiempo" 
            :value="old('tiempo')"
            />
        <x-input-error :messages="$errors->get('tiempo')" class="mt-2" />
    </div>

    <div class="flex justify-end mt-8">
        <x-primary-button>
            Crear carrusel
        </x-primary-button>
    </div>

</form>