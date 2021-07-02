<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionController extends Controller
{
    public function index()
    {
        return view ('collector.myCollection');
    }
}
