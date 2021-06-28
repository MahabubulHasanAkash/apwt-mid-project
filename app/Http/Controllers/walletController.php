<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class walletController extends Controller
{
    public function index(Request $req){
        
        $email = $req->session()->get('useremail');

        if($req->session()->has('useremail')){
            
            $user = DB::table('wallet')
                        ->where( 'email', $email)->first();
            
                        return view('collector.wallet')->with('user', $user);
        }
        else{
            return redirect('/login')->with('msg', 'You Have to login First!');
        }
    }
}
