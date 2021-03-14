<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Http\Requests\PlanEditRequest;
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

    public function store(PlanRequest $request)
    {
        $plan = Plan::create($request->all());

        $plan->save();

        return redirect()->route('plans')->with('status', 'Plan created.');
    }

    public function edit(Plan $plan)
    {
        return $this->validateUserAndGo(function () use ($plan) {
            return view('plans.edit', compact($plan, 'plan'));
        });
    }

    public function update(PlanEditRequest $request, Plan $plan)
    {
        $plan->update([
            'name' => $request->name,
            'service_id' => $request->service_id,
            'price' => $request->price
        ]);

        $plan->save();

        return redirect()->route('plans')->with('status', 'Plan updated.');
    }
}
