<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalisthenicsController extends Controller
{
    public function index()
    {
        return view('calisthenics.index');
    }
}
