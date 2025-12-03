<form 
    class="md:w-1/2"
    wire:submit.prevent="guardarConfiguracion"
>
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Tiempo entre transiciones')" />
        <x-text-input 
            id="tiempo_transicion" 
            class="block mt-1 w-full" 
            type="number"
            wire:model="tiempo_transicion" 
            :value="old('tiempo_transicion')" 
            placeholder="Escribe la duración en segundos entre cada transición"
            />
        <x-input-error :messages="$errors->get('tiempo_transicion')" class="mt-2" />
    </div>


    <div class="flex justify-end mt-8">
        <x-primary-button>
            Guardar cambios
        </x-primary-button>
    </div>

</form>