<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChannelComponent extends Component
{

    public $channel;

    public $showActions;

    public function render()
    {
        return view('livewire.channel-component');
    }
}
