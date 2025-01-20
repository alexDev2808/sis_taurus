<?php

namespace App\Livewire;

use App\Models\Carrusel;
use Livewire\Component;

class MostrarCarruseles extends Component
{

    protected $listeners = ['eliminarCarrusel'];

    public function eliminarCarrusel( Carrusel $carrusel) {
        $carrusel->delete();
    }
    public function render()
    {
        $carruseles = Carrusel::all();
        return view('livewire.mostrar-carruseles', [
            'carruseles'=> $carruseles
        ]);
    }
}
