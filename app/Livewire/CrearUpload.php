<?php

namespace App\Livewire;

use App\Models\Upload;
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

        // Validar datos
        $datos = $this->validate();

        // Almacenar la imagen
        $imagen = $this->imagen->store('public/uploads');
        $datos['imagen'] = str_replace('public/uploads/','', $imagen);

        // Subir imagen
        Upload::create([
            'titulo' => $datos['titulo'],
            'imagen' => $datos['imagen']
        ]);

        // Crear mensaje
        session()->flash('mensaje','Se subio correctamente');

        // Redireccionar
        return redirect()->route('uploads.index');
    }

    public function render()
    {
        return view('livewire.crear-upload');
    }


}
