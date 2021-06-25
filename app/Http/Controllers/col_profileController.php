<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class col_profileController extends Controller
{
    public function index(){
        return view('Collector.profile');
    }
}
