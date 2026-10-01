<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DietController extends Controller
{
    public function index()
    {
        return view('diet.index');
    }
}
