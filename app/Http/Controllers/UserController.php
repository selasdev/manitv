<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {

        if (auth()->user()->role === "admin") {
            return view('admin.users.create');
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

        return back()->with('status', 'Creado con éxito');
    }
}
