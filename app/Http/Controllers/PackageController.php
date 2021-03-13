<?php

namespace App\Http\Controllers;

use App\Models\Package;

use App\Http\Requests\PackageRequest;

class PackageController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === "admin") {
            $packages = Package::latest()->get();

            return view('admin.packages.index', compact('packages'));
        } else {
            return redirect()->route('home');
        }
    }

    public function creation()
    {

        if (auth()->user()->role === "admin") {
            return view('admin.packages.create');
        } else {
            return redirect()->route('home');
        }
    }

    public function edit(Package $package)
    {

        if (auth()->user()->role === "admin") {
            return view('admin.packages.edit', compact('package'));
        } else {
            return redirect()->route('home');
        }
    }

    public function store(PackageRequest $request)
    {
        $package = Package::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        $package->save();

        return back()->with('status', 'Succesfully created');
    }

    public function update(PackageRequest $request, Package $package)
    {
        $package->update([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        $package->save();

        return redirect()->route('admin.packages')->with('status', 'Succesfully updated');
    }
}
