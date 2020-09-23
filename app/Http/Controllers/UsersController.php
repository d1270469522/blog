<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return $user;
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
}
