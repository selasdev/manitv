<?php

namespace App\Http\Livewire;

use App\Models\Channel;
use Livewire\Component;

class ChannelSelectorComponent extends Component
{
    public $channel_id;
    
    public function render()
    {
        return view('livewire.channel-selector-component', [
            "channels" => Channel::all()
        ]);
    }
}
