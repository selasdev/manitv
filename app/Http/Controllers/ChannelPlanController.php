<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditChannelPlansRequest;
use App\Models\Channel;
use App\Models\ChannelPlan;
use App\Models\Plan;
use App\Models\Service;

class ChannelPlanController extends AdminRouteController
{

    public function edit(Channel $channel)
    {
        return $this->validateUserAndGo(function () use ($channel) {
            $plans = Service::where('can_have_channel', 1)
                ->get()
                ->flatMap
                ->plans;

            $addedPlans = $channel->plans;

            $isAdded = function (Plan $plan) use ($addedPlans) {
                foreach ($addedPlans as $addedPlan) {
                    if ($plan->id == $addedPlan->id) {
                        return true;
                    }
                }
                return false;
            };
            return view('channels.edit-plans', [
                'channel' => $channel,
                'plans' => $plans,
                'isAdded' => $isAdded
            ]);
        });
    }
    
    public function store(EditChannelPlansRequest $request, Channel $channel)
    {
        $allData = $request->all();
        $addedPlans = ChannelPlan::where('channel_id', $channel->id);
        $addedPlans->delete();

        foreach ($allData as $key => $planId) {
            if (substr($key, 0, 4) !== 'plan') {
                continue;
            }
            $channelPlan = ChannelPlan::create(
                [
                    'channel_id' => $channel->id,
                    'plan_id' => $planId
                ]
            );
            $channelPlan->save();
        }

        return redirect()->route('channels')->with('status', "$channel->name plans updated.");
    }
}
