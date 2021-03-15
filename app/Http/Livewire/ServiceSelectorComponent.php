<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceSelectorComponent extends Component
{
    public $service_id;
    
    public function render()
    {
        return view('livewire.service-selector-component', [
            "services" => Service::all()
        ]);
    }
}
