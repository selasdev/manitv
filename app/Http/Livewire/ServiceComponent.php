<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServiceComponent extends Component
{

    public $service;

    public $showActions;
    
    public function render()
    {
        return view('livewire.service-component');
    }
}
