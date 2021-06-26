<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terms;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class termsController extends Controller
{
    public function view (Request $req)
    {
        
        // $a_id = $req->session()->get('id');
        //     $a_name = $req->session()->get('name');
        //     $a_password = $req->session()->get('password');
        //     $a_email = $req->session()->get('useremail');

        // return view('admin.terms')
        // ->with('id',$a_id)
        // ->with('name',$a_name)
        // ->with('password',$a_password)
        // ->with('useremail',$a_email);
        // return view('admin.terms');
        $terms = Terms::all();
        
        return view ('admin.terms')->with('termList',$terms);

    }
    public function update(Request $req)
    {
        // $termss = Terms::first();
        // $termss->terms = $req->terms;
        // $termss->save();
        DB::table('terms')
            ->where('id',1)
            ->update(['terms' => $req->terms]);
        // DB::table('terms')->update(
        //     array(
                
        //         'terms' => $req->terms,
                
        //     )
        // );
        

       // return view('user.edit')->with('user',$user);
       return redirect('admin/terms');
    }
}
