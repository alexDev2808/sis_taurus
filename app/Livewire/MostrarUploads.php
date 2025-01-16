<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;

class MostrarUploads extends Component
{
    public function render()
    {
        $uploads = Upload::paginate(15);

        return view('livewire.mostrar-uploads', [
            'uploads' => $uploads
        ]);
    }
}
