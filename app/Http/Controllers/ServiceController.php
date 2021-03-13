<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index() {
        return view('services.index');
    }

    public function create() {
        return view('services.create');
    }

    public function store(ServiceRequest $request) {
        $service = Service::create([
            'name' => $request->name,
            'can_have_channel' => $request->has('canAddChannels')
        ]);

        $service->save();

        return redirect()->route('services')->with('status', 'Servicio creado.');
    }
}
