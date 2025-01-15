<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CrearUpload extends Component
{
    public $titulo;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'imagen' => 'required|image|max:5120'
    ];

    public function subirArchivo() {

        $datos = $this->validate();

    }

    public function render()
    {
        return view('livewire.crear-upload');
    }


}
