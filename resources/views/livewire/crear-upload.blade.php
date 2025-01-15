<form 
    class="md:w-1/2"
>
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Titulo')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
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
            name="imagen" 
            />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <div class="flex justify-end mt-8">
        <x-primary-button>
            Guardar archivo
        </x-primary-button>
    </div>

</form>