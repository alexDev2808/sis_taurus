<?php

namespace App\Livewire;

use App\Models\Ensamble;
use Livewire\Component;

class CarruselEnsamble extends Component
{
    public $isPaused = false;
    public $delay = 90000;
    public $color_fondo = '002455';

    #Tamaño de pantalla
    public $screenWidth = 0;
    public $screenHeight = 0;

    protected $listeners = [];

    public function updateScreenSize($width, $height)
    {
        $this->screenWidth = $width;
        $this->screenHeight = $height;
    }

    public function toogleBtn() {
        $this->isPaused = !$this->isPaused;
    }
    public function render()
    {
        $items = Ensamble::all();
        return view('livewire.carrusel-ensamble', compact('items'));
    }
}
