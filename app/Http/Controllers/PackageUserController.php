<?php

namespace App\Http\Controllers;

use App\Models\PackageUser;

use App\Http\Requests\PackageUserRequest;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageUserController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === "user") {
            $packages = PackageUser::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();

            return view('user.packages.index', compact('packages'));
        } else {
            return redirect()->route('home');
        }
    }

    public function indexAdmin()
    {
        if (auth()->user()->role === "admin") {
            $packages = PackageUser::where('state', 'waiting')->orderBy('updated_at', 'desc')->get();

            return view('admin.userpackages.index', compact('packages'));
        } else {
            return redirect()->route('home');
        }
    }

    public function bills()
    {
        if (auth()->user()->role === "user") {
            $packages = PackageUser::where([['user_id', auth()->user()->id], ['state', '!=', 'waiting'], ['state', '!=', 'rejected']])->orderBy('created_at', 'desc')->get();

            return view('user.packages.bills', compact('packages'));
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

    public function details(PackageUser $package)
    {

        if (auth()->user()->role === "admin") {
            return view('admin.userpackages.details', compact('package'));
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

    public function update(Request $request, PackageUser $package)
    {
        if ($request->all()['status'] === "Reject") {
            $package->update([
                'state' => 'rejected'
            ]);
            $package->save();

            return redirect()->route('admin.packageusers.manage')->with('status', 'Request Rejected ');
        } else {
            $oldRequests = PackageUser::where([['user_id', $package->user->id], ['state', 'approved']]);

            $oldRequests->update([
                'state' => 'expired'
            ]);

            $package->update([
                'state' => 'approved'
            ]);

            $package->save();

            return redirect()->route('admin.packageusers.manage')->with('status', 'Request Approved ');
        }
    }
}
