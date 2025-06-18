<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    // Permite almacenar lo siguiente:
    // Arreglos, Strings, Enteros, Flotantes, Booleanos, Objetos, Colecciones, Null etc.

    public $title = 'Hola Mundo'; // Se puede acceder desde la vista con $title
    public function render()
    {
        return view('livewire.create-post');
    }
}
