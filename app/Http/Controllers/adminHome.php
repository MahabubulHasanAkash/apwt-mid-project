<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminHome extends Controller
{
    public function index(Request $req)
    {
        
            $a_id = $req->session()->get('id');
            $a_name = $req->session()->get('name');
            $a_email = $req->session()->get('useremail');

        return view('admin.home')
        ->with('id',$a_id)
        ->with('name',$a_name)
        ->with('useremail',$a_email);
  
        // @include('includes.adminSideBar');
         //return view('admin.home',compact('id',$a_id));
        
        
        
    }
}
