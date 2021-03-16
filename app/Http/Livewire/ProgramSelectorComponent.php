<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;

class ProgramSelectorComponent extends Component
{    
    public $program_id;
    public $channel_id;
    
    public function render()
    {
        $programs = null;
        if(isset($this->channel_id)) {
            $programs = Program::where('channel_id', '=', $this->channel_id)
                ->get();
        }
        else {
            $programs = Program::all();
        }
        return view('livewire.program-selector-component', [
            'programs' => $programs
        ]);
    }
}
