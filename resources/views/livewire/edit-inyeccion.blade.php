
<form 
    class="md:w-1/2"
    wire:submit.prevent="editarItem"
>
    <div class="mt-4">
        <x-input-label for="nombre" :value="__('Titulo del elemento')" />
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
        <x-input-label for="desc" :value="__('Descripción')" />
        <x-text-input 
            id="desc" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="desc" 
            :value="old('desc')" 
            placeholder="Ej. OEE general, indicadores generales"
            />
        <x-input-error :messages="$errors->get('desc')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="url" :value="__('URL del recurso')" />
        <x-text-input 
            id="url" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="url" 
            :value="old('url')"
            />
        <x-input-error :messages="$errors->get('url')" class="mt-2" />
    </div>

    <div class="flex justify-end mt-8">
        <x-primary-button>
            Guardar cambios
        </x-primary-button>
    </div>

</form>