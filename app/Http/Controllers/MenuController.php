<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Ingredient;

class MenuController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        $pizza = Pizza::all();
//        dd($pizza);
        return view('menu', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('index');
    }

    public function store()
    {
        return view('index');
    }

    public function edit()
    {
        return view('index');
    }

    public function update()
    {
        return view('index');
    }

    public function destroy()
    {
        return view('index');
    }
}
