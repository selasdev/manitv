<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;

class ProgramListComponent extends Component
{
    public function render()
    {
        return view('livewire.program-list-component', [
            'programs' => Program::all()
        ]);
    }
}
