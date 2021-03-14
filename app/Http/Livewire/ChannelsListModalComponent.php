<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChannelsListModalComponent extends Component
{

    public $plan;
    
    public function render()
    {
        return view('livewire.channels-list-modal-component');
    }
}
