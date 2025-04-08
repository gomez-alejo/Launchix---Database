<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
<<<<<<< HEAD
    public function saludar(){
        return "Hola desde el controlador UserController";
=======
    public function create()
    {
        return view('users_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'nullable|string',
            'role' => 'required|in:client,entrepreneur,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'role' => $request->role,
        ]);

        return redirect()->route('users.create')->with('success', 'User created successfully.');
>>>>>>> main
    }
}
