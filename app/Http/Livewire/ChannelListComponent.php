<?php

namespace App\Http\Livewire;

use App\Models\Channel;
use Livewire\Component;

class ChannelListComponent extends Component
{
    public function render()
    {
        $channels = Channel::all();
        return view('livewire.channel-list-component', compact('channels'));
    }
}
