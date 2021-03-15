<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramEditRequest;
use App\Http\Requests\ProgramRequest;
use App\Models\Channel;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends AdminRouteController
{

    public function index()
    {
        return $this->validateUserAndGo(function () {
            return view('programs.index');
        });
    }

    public function create()
    {
        return $this->validateUserAndGo(function () {
            return view('programs.create');
        });
    }

    public function store(ProgramRequest $request)
    {
        Program::create($request->all())
            ->save();

        return redirect()->route('programs')->with('status', 'Program created.');
    }

    public function edit(Program $program)
    {
        return $this->validateUserAndGo(function() use($program) {
            return view('programs.edit', compact('program'));
        });
    }
    
    public function update(ProgramEditRequest $request, Program $program)
    {
        $program->update([
            'name' => $request->name,
            'channel_id' => $request->channel_id
        ]);

        $program->save();

        return redirect()->route('programs')->with('status', 'Program updated.');
    }
}
