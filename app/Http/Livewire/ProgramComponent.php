<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramComponent extends Component
{

    public $program;
    public $showActions;
    
    public function render()
    {
        return view('livewire.program-component');
    }
}
