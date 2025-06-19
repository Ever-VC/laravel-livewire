<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $count = 0;
    public function render()
    {
        return view('livewire.contador');
    }

    public function restar()
    {
        $this->count--;
    }
    public function sumar($cantidad=1)
    {
        $this->count += $cantidad;
    }
}
