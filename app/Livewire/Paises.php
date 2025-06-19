<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{
    public $paises = [
        'Argentina',
        'Brasil',
        'Chile'
    ];

    public $pais = '';

    public function agregarPais()
    {
        if (!empty($this->pais)) {
            array_push($this->paises, $this->pais);
            //$this->pais = ''; // Resetear el campo de entrada después de agregar el país
            $this->reset('pais'); // Alternativa para resetear el campo
            // En caso de ser varios campos, se puede usar:
            // $this->reset(['pais', 'otroCampo']);
        }
    }

    public function render()
    {
        return view('livewire.paises');
    }
}
