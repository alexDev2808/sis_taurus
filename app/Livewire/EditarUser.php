<?php

namespace App\Livewire;

use App\Models\User;
use Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Request;

class EditarUser extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $rol;

    protected function rules() {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($this->user_id)],
            'password' => ['nullable', 'min:5','confirmed'],
            'rol' => ['required','numeric','between:1,4'],
        ];
    }

    public function mount(User $user) {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->rol = $user->rol;
    }

    public function editarUsuario() {
        $datos = $this->validate();

        $user = User::find($this->user_id);

        if($datos['password']) { 
            $user->password = Hash::make($datos['password']); 
        }

        $user->name = $datos['name'];
        $user->email = $datos['email'];
        $user->rol = $datos['rol'];

        $user->save();

        session()->flash('mensaje','El usuario se actualizo correctamente!');
        return redirect()->route('users.index');

    }

    public function render()
    {
        return view('livewire.editar-user');
    }
}
