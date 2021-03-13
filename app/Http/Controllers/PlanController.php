<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends AdminRouteController
{

    public function index()
    {
        return $this->validateUserAndGo(function () {
            return view('plans.index');
        });
    }

    public function create()
    {
        return $this->validateUserAndGo(function () {
            return view('plans.create');
        });
    }

    public function store(PlanRequest $request) {
        $plan = Plan::create($request->all());

        $plan->save();

        return redirect()->route('plans')->with('status', 'Plan creado.');
    }
}
