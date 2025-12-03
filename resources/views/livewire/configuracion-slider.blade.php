<form 
    class="w-full md:w-3/4 flex flex-col"
    wire:submit.prevent="guardarConfiguracion"
>

    <div class="flex gap-10 flex-col md:flex-row">

        <div class="mt-4 w-full md:w-1/2">
            <x-input-label for="color_fondo" :value="__('Color de fondo')" />
            <div class="flex items-end">
                <x-text-input 
                    id="color_fondo" 
                    class="block mt-1 w-full" 
                    type="text"
                    wire:model="color_fondo" 
                    :value="old('color_fondo')" 
                    placeholder="Ejemplo: FFFFFF"
                    />
                <div class="w-12 h-12 ms-2 flex items-end justify-center">
                    <div id="colorPreview" class="w-10 h-10 border border-gray-500 rounded-full" style="background: #{{ $color_fondo }}"></div>
                </div>
            </div>
            <p class="text-sm text-gray-400">Escribe el código hexadecimal sin el signo #</p>
            <x-input-error :messages="$errors->get('color_fondo')" class="mt-2" />

        </div>

        <div class="mt-4 w-full md:w-1/2">
            <x-input-label for="titulo" :value="__('Tiempo entre transiciones')" />
            <div class="flex flex-col md:flex-row items-end">
                    <x-text-input 
                        id="tiempo_transicion"
                        class="block mt-1" 
                        type="number"
                        wire:model="tiempo_transicion" 
                        :value="old('tiempo_transicion')" 
                        placeholder="Escribe la duración en segundos entre cada transición"
                        />
                    <p class="ms-1 text-gray-700 text-sm">segundos</p>
            </div>
            <x-input-error :messages="$errors->get('tiempo_transicion')" class="mt-2" />

        </div>
    
    </div>

    <div class="flex justify-end mt-8">
        <x-primary-button>
            Guardar cambios
        </x-primary-button>
    </div>

</form>

<script>

document.addEventListener('DOMContentLoaded', function () {
  const colorPicker = document.getElementById('color_fondo');
  const colorPreview = document.getElementById('colorPreview');

  // Función para actualizar la previsualización del color
  function updateColorPreview() {
    const colorValue = colorPicker.value;
    colorPreview.style.backgroundColor = `#${colorValue}`;
  }

  // Actualizar la previsualización cuando el valor del campo cambie
  colorPicker.addEventListener('input', updateColorPreview);

  // Establecer el color inicial al cargar la página
  updateColorPreview();
});

</script>