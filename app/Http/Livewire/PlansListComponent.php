<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Livewire\Component;

class PlansListComponent extends Component
{
    public function render()
    {
        return view('livewire.plans-list-component', [
            'plans' => Plan::all()
        ]);
    }
}
