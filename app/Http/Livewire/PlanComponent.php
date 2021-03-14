<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlanComponent extends Component
{

    public $plan;
    
    public $showActions;

    public function render()
    {
        return view('livewire.plan-component');
    }
}
