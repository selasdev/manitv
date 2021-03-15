<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramAddRequest;
use App\Models\Channel;
use App\Models\ProgramTime;
use Illuminate\Http\Request;

class ProgramTimeController extends AdminRouteController
{
    public function index(Channel $channel)
    {
        return view('program-time.index', compact('channel'));
    }

    public function add(Channel $channel)
    {
        return $this->validateUserAndGo(function () use ($channel) {
            return view('program-time.add', [
                "channel" => $channel
            ]);
        });
    }

    public function store(ProgramAddRequest $request, Channel $channel)
    {
        ProgramTime::create($request->all())
            ->save();

        return redirect()->route('channelSchedule', [
            'channel' => $channel
        ])->with('status', 'Schedule updated.');
    }
}
