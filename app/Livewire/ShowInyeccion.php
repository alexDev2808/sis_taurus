<?php

namespace App\Livewire;

use App\Models\Inyeccion;
use Livewire\Component;

class ShowInyeccion extends Component
{

    protected $listeners = ['eliminarItem'];
    public function eliminarItem(Inyeccion $inyeccion) {
        $inyeccion->delete();
    }
    public function render()
    {
        $items = Inyeccion::all();
        return view('livewire.show-inyeccion', compact('items'));
    }
}
