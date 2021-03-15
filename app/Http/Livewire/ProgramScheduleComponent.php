<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramScheduleComponent extends Component
{
    public $program;
    
    public function render()
    {
        return view('livewire.program-schedule-component');
    }
}
