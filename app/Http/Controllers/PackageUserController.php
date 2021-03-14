<?php

namespace App\Http\Controllers;

use App\Models\PackageUser;

use App\Http\Requests\PackageUserRequest;
use App\Models\Package;

class PackageUserController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === "user") {
            $packages = PackageUser::where('user_id', auth()->user()->id)->orderBy('updated_at', 'desc')->get();

            return view('user.packages.index', compact('packages'));
        } else {
            return redirect()->route('home');
        }
    }

    public function creation()
    {

        if (auth()->user()->role === "user") {
            $user = auth()->user();
            $packages = Package::all();

            return view('user.packages.create', compact('user', 'packages'));
        } else {
            return redirect()->route('home');
        }
    }

    public function edit(PackageUser $package)
    {

        if (auth()->user()->role === "admin") {
            return view('admin.packages.edit', compact('package'));
        } else {
            return redirect()->route('home');
        }
    }

    public function store(PackageUserRequest $request)
    {
        $oldWaitings = PackageUser::where([['user_id', $request['user_id']], ['state', 'waiting']]);

        $oldWaitings->delete();

        $package = PackageUser::create([
            'user_id' => $request['user_id'],
            'package_id' => $request['package_id'],
            'state' => $request['state'],
        ]);

        $package->save();

        return redirect()->route('user.packageuser')->with('status', 'Succesfully created ');
    }

    public function update(PackageUserRequest $request, PackageUser $package)
    {
        $package->update([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        $package->save();

        return redirect()->route('admin.packages')->with('status', 'Succesfully updated');
    }
}
