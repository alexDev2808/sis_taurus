<?php

namespace App\Livewire;

use App\Models\Inyeccion;
use Livewire\Component;

class EditInyeccion extends Component
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

    public function mount(Inyeccion $inyeccion) {
        $this->item_id = $inyeccion->id;
        $this->nombre = $inyeccion->nombre;
        $this->desc = $inyeccion->desc;
        $this->url = $inyeccion->url;
    }

    public function editarItem() {
        $data = $this->validate();

        $item = Inyeccion::find( $this->item_id );

        $item->nombre = $data['nombre'];
        $item->desc = $data['desc'];
        $item->url = $data['url'];

        $item->save();

        session()->flash('mensaje','El elemento se actualizo correctamente!');

        return redirect()->route('inyeccion.index');
        
    }

    public function render()
    {
        return view('livewire.edit-inyeccion');
    }
}
