<?php

namespace App\Livewire;

use App\Models\Ensamble;
use Livewire\Component;

class EditEnsamble extends Component
{
    public $item_id;
    public $nombre;
    public $desc;
    public $url;

    protected $rules = [
        'nombre' => 'required|string',
        'desc'=> 'required|string',
        'url'=> 'required|string',
    ];

    public function mount(Ensamble $ensamble) {
        $this->item_id = $ensamble->id;
        $this->nombre = $ensamble->nombre;
        $this->desc = $ensamble->desc;
        $this->url = $ensamble->url;
    }

    public function editarItem() {
        $data = $this->validate();

        $item = Ensamble::find( $this->item_id );

        $item->nombre = $data['nombre'];
        $item->desc = $data['desc'];
        $item->url = $data['url'];

        $item->save();

        session()->flash('mensaje','El elemento se actualizo correctamente!');

        return redirect()->route('ensamble.index');
        
    }

    public function render()
    {
        return view('livewire.edit-ensamble');
    }
}
