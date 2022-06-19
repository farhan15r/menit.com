<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "categories" => Category::all() //untuk navbar
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:3|max:255|unique:users',
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //backcript password
        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        //sesion flash
        session()->flash('success', 'Register success, please login');

        return redirect('/login');
    }
}
