<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarUpload extends Component
{
    public $titulo;
    public $imagen;

    use WithFileUploads;


    protected $rules = [
        'titulo' => 'required|string',
        'imagen' => 'required|image|max:5120'
    ];

    public function mount(Upload $upload){
        $this->titulo = $upload->titulo;
        $this->imagen = $upload->imagen;
    }

    public function render()
    {
        return view('livewire.editar-upload');
    }
}
