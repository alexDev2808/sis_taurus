<?php

namespace App\Livewire;

use Livewire\Component;

class ConfiguracionSlider extends Component
{
    public $tiempo_transicion;

    protected $rules = [
        'tiempo_transicion' => 'required|integer|min:10|max:3600'
    ];

    public function guardarConfiguracion() 
    {
        $datos = $this->validate();


        session()->flash('mensaje','Se guardaron los cambios correctamente');
        return redirect()->route('uploads.index');
    }

    public function render()
    {
        return view('livewire.configuracion-slider');
    }
}
