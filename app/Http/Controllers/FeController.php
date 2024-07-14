<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        return view('FE.views.index');
    }

    public function category()
    {
        return view('FE.views.category');
    }

    public function details()
    {
        return view('FE.views.details');
    }

    public function support()
    {
        return view('FE.views.send-support');
    }

    public function checkout()
    {
        
    }

    public function store()
    {

    }
}
