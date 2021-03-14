<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditChannelPlansRequest;
use App\Models\Channel;
use App\Models\ChannelPlan;
use App\Models\Plan;
use App\Models\Service;

class ChannelPlanController extends AdminRouteController
{

    //Coming from channels view
    public function editChannelPlans(Channel $channel)
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

    //Coming from channels view
    public function storeChannelPlans(EditChannelPlansRequest $request, Channel $channel)
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

    //Comming from plans view
    public function editPlanChannels(Plan $plan)
    {
        return $this->validateUserAndGo(function () use ($plan) {
            $channels = Channel::all();
            $addedChannels = $plan->channels;

            $isAdded = function (Channel $channel) use ($addedChannels) {
                foreach ($addedChannels as $addedChannel) {
                    if ($channel->id == $addedChannel->id) {
                        return true;
                    }
                }
                return false;
            };

            return view('plans.edit-channels', compact('plan', 'channels', 'isAdded'));
        });
    }

    //Comming from plans view
    public function storePlanChannels(EditChannelPlansRequest $request, Plan $plan)
    {
        $allData = $request->all();
        $addedChannels = ChannelPlan::where('plan_id', $plan->id);
        $addedChannels->delete();

        foreach ($allData as $key => $channelId) {
            if (substr($key, 0, 7) !== 'channel') {
                continue;
            }
            $channelPlan = ChannelPlan::create(
                [
                    'channel_id' => $channelId,
                    'plan_id' => $plan->id
                ]
            );
            $channelPlan->save();
        }

        return redirect()->route('plans')->with('status', "$plan->name channels updated.");
    }
}
