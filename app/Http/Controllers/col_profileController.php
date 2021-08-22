<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class col_profileController extends Controller
{

    public function index(Request $req){

        $email = $req->session()->get('useremail');

        $user = DB::table('user')
                ->where( 'email', $email)->first();
                
        return view('Collector.profile')->with('user', $user);
    }
    public function profile_api($id){

        $user = DB::table('user')
                ->where( 'id', $id)->first();
                
        return response()->json($user);
    }


    

    
}
