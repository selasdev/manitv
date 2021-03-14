<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Plan;
use App\Models\PackagePlan;


use App\Http\Requests\PackageRequest;
use App\Http\Requests\PackageEditRequest;

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
            $plans = Plan::all();

            return view('admin.packages.create', compact('plans'));
        } else {
            return redirect()->route('home');
        }
    }

    public function edit(Package $package)
    {

        if (auth()->user()->role === "admin") {
            $plans = Plan::all();

            return view('admin.packages.edit', compact('package', 'plans'));
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

        foreach ($request->all() as $key => $value) {
            if (strpos($key, "plan") !== false) {
                $packageplan = PackagePlan::create(
                    [
                        'plan_id' => $value,
                        'package_id' => $package->id,
                    ]
                );

                $packageplan->save();
            }
        }

        return back()->with('status', 'Succesfully created');
    }

    public function update(PackageEditRequest $request, Package $package)
    {
        $package->update([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        $package->save();

        $oldPackagePlans = PackagePlan::where('package_id', $package->id);

        $oldPackagePlans->delete();

        foreach ($request->all() as $key => $value) {
            if (strpos($key, "plan") !== false) {
                $packageplan = PackagePlan::create(
                    [
                        'plan_id' => $value,
                        'package_id' => $package->id,
                    ]
                );

                $packageplan->save();
            }
        }

        return redirect()->route('admin.packages')->with('status', 'Succesfully updated');
    }
}
