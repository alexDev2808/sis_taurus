<?php

namespace App\Livewire;

use App\Models\Carrusel;
use Livewire\Component;

class MostrarCarruseles extends Component
{
    public function render()
    {
        $carruseles = Carrusel::all();
        return view('livewire.mostrar-carruseles', [
            'carruseles'=> $carruseles
        ]);
    }
}
