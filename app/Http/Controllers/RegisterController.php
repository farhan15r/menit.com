<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "categories" => Category::all() //untuk navbar
        ]);
    }
}
