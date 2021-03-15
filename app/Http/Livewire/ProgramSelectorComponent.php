<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;

class ProgramSelectorComponent extends Component
{    
    public $program_id;
    
    public function render()
    {
        return view('livewire.program-selector-component', [
            'programs' => Program::all()
        ]);
    }
}
