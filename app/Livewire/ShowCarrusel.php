<?php

namespace App\Livewire;

use App\Models\Carrusel;
use App\Models\Upload;
use Livewire\Component;

class ShowCarrusel extends Component
{
    public $isPaused = false;
    public $delay = 60000;
    

    protected $listeners = [];

    public function toogleBtn() {
        $this->isPaused = !$this->isPaused;
    }

    public function render()
    {
        $comunicados = [
            [
                'titulo' => 'Frase de la semana',
                'contenido' => 'En noviembre se comienza a saber qué tan largo el invierno será - Martha Gellhorn.'
            ]
        ];
        $uploads = Upload::all();
        return view('livewire.show-carrusel', compact('uploads', 'comunicados'));
    }
}
