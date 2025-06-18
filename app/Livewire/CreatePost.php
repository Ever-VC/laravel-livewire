<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{
    // Permite almacenar lo siguiente:
    // Arreglos, Strings, Enteros, Flotantes, Booleanos, Objetos, Colecciones, Null etc.

    public $title; // Se puede acceder desde la vista con $title
    public $name, $email;

    public function mount(User $user)
    {
        // Busca al usuario con el ID proporcionado
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
