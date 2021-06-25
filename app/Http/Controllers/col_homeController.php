<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class col_homeController extends Controller
{
    public function index(){
        //return view('Collector.home');
    }

    public function getItems(Request $req){

        $item = DB::table('art_details')->get();
        return view('collector.home')->with('item', $item);

    }


}
