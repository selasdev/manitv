<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {
        if (auth()->user()->role === "admin") {
            $users = User::latest()->get();

            return view('admin.users.index', compact('users'));
        } else {
            return redirect()->route('home');
        }
    }

    public function creation()
    {

        if (auth()->user()->role === "admin") {
            return view('admin.users.create');
        } else {
            return redirect()->route('home');
        }
    }

    public function edit(User $user)
    {

        if (auth()->user()->role === "admin") {
            return view('admin.users.edit', compact('user'));
        } else {
            return redirect()->route('home');
        }
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'username' => $request['username'],
            'role' => $request['role'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->save();

        return back()->with('status', 'Succesfully created');
    }

    public function update(UserEditRequest $request, User $user)
    {
        $user->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'username' => $request['username'],
            'role' => $request['role'],
        ]);

        $user->save();

        return back()->with('status', 'Succesfully updated');
    }
}
