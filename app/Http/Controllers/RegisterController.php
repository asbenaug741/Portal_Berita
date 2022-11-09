<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'password' => ['required|min:3|max:255']
        ]);

        $validatedData['password'] = bcrypt($validated['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
