<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicesListComponent extends Component
{
    public function render()
    {
        return view('livewire.services-list-component', [
            'services' => Service::all()
        ]);
    }
}
