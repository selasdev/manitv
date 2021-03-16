<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChannelEditRequest;
use App\Http\Requests\ChannelRequest;
use App\Models\Channel;

class ChannelController extends AdminRouteController
{
    public function index()
    {
        return view('channels.index');
    }

    public function create()
    {
        return $this->validateUserAndGo(function () {
            return view('channels.create');
        });
    }

    public function store(ChannelRequest $request)
    {
        $channel = Channel::create($request->all());

        $channel->save();

        return redirect()->route('channels')->with('status', 'Channel created.');
    }

    public function edit(Channel $channel)
    {
        return $this->validateUserAndGo(function () use ($channel) {
            return view('channels.edit', compact($channel, 'channel'));
        });
    }

    public function update(ChannelEditRequest $request, Channel $channel)
    {
        $channel->update([
            'name' => $request->name,
            'number' => $request->number
        ]);

        $channel->save();

        return redirect()->route('channels')->with('status', 'Channel updated.');
    }
}
