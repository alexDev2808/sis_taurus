<?php

namespace App\Livewire;

use App\Models\Ensamble;
use Livewire\Component;

class CarruselEnsamble extends Component
{
    public $isPaused = false;
    public $delay = 90000;

    protected $listeners = [];

    public function toogleBtn() {
        $this->isPaused = !$this->isPaused;
    }
    public function render()
    {
        $items = Ensamble::all();
        return view('livewire.carrusel-ensamble', compact('items'));
    }
}
