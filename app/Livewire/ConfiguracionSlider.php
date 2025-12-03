<?php

namespace App\Livewire;

use App\Models\SliderSetting;
use Livewire\Component;

class ConfiguracionSlider extends Component
{
    public $tiempo_transicion;
    public $color_fondo;

    protected $rules = [
        'tiempo_transicion' => 'required|integer|min:10|max:3600',
        'color_fondo' => 'string|max:6',
    ];

    public function mount()
    {
        $config = SliderSetting::getConfig();
        $this->tiempo_transicion = $config->tiempo_transicion;
        $this->color_fondo = $config->color_fondo;
    }

    public function guardarConfiguracion()
    {
        $this->validate();

        $config = SliderSetting::getConfig();
        $config->update([
            'tiempo_transicion' => $this->tiempo_transicion,
            'color_fondo' => $this->color_fondo,
        ]);

        session()->flash('mensaje','Se guardaron los cambios correctamente');
        return redirect()->route('uploads.index');
    }

    public function render()
    {
        return view('livewire.configuracion-slider');
    }
}
