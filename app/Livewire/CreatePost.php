<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public function render()
    {
        //return view('livewire.create-post');
        return <<<'HTML'
        <div>
            HOLA DESDE EL COMPOENENTE CREATE POST
        </div>

        HTML;

    }
}
