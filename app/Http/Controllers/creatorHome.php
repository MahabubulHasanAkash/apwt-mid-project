<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class creatorHome extends Controller
{
    public function index()
    {
        return view('creator.home');
    }
}
