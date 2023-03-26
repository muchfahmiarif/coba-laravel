<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'unique:users', 'max:255'],
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        dd('success');
    }
}
