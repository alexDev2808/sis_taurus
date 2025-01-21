<?php

namespace App\Livewire;

use App\Models\Inyeccion;
use Livewire\Component;

class CarruselInyeccion extends Component
{
    public $isPaused = false;
    public $delay = 30000;

    protected $listeners = [];

    public function toogleBtn() {
        $this->isPaused = !$this->isPaused;
    }

    public function render()
    {
        $items = Inyeccion::all();
        return view('livewire.carrusel-inyeccion', compact('items'));
    }
}
