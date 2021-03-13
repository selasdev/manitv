<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceEditRequest;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends AdminRouteController
{

    public function index()
    {
        return $this->validateUserAndGo(function () {
            return view('services.index');
        });
    }

    public function create()
    {
        return $this->validateUserAndGo(function () {
            return view('services.create');
        });
    }


    public function store(ServiceRequest $request)
    {
        $service = Service::create([
            'name' => $request->name,
            'can_have_channel' => $request->has('canAddChannels')
        ]);

        $service->save();

        return redirect()->route('services')->with('status', 'Servicio creado.');
    }

    public function edit(Service $service)
    {
        return $this->ValidateUserAndGo(function () use ($service) {
            $checkedStr = '';
            if ($service->can_have_channel) {
                $checkedStr = 'checked="checked"';
            }
            return view('services.edit', [
                'service' => $service,
                'checkedStr' => $checkedStr
            ]);
        });
    }

    public function update(ServiceEditRequest $request, Service $service)
    {
        $service->update([
            'name' => $request->name,
            'can_have_channel' => $request->has('canAddChannels')
        ]);

        $service->save();

        return redirect()->route('services')->with('status', 'Servicio actualizado');
    }
}
