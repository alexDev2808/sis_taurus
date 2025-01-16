<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;

class MostrarUploads extends Component
{
    protected $listeners = ['eliminarUpload'];

    public function eliminarUpload( Upload $upload ) {
        $upload->delete();
    }

    public function render()
    {
        $uploads = Upload::paginate(15);

        return view('livewire.mostrar-uploads', [
            'uploads' => $uploads
        ]);
    }
}
