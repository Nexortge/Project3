<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('menu');
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
