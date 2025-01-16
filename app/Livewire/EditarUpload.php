<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarUpload extends Component
{
    public $upload_id;
    public $titulo;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;


    protected $rules = [
        'titulo' => 'required|string',
        'imagen_nueva' => 'nullable|image|max:5120'
    ];

    public function mount(Upload $upload){
        $this->upload_id = $upload->id;
        $this->titulo = $upload->titulo;
        $this->imagen = $upload->imagen;
    }

    public function editarVacante() {
        $datos = $this->validate();

        // Si hay una nueva imagen
        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/uploads');
            $datos['imagen'] = str_replace('public/uploads/', '', $imagen);

        }

        // Encontrar el Upload a editar
        $upload = Upload::find($this->upload_id);

        // Asignar los valores
        $upload->titulo = $datos['titulo'];
        $upload->imagen = $datos['imagen'] ?? $upload->imagen;

        // Guardar upload
        $upload->save();

        // Redireccionar
        session()->flash('mensaje', 'El elemento se actualizó correctamente!');

        return redirect()->route('uploads.index');
    }

    public function render()
    {
        return view('livewire.editar-upload');
    }
}
