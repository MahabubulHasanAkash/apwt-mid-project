<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class adminController extends Controller
{
    
    public function create(Request $req)
    {
        // $req->session()->put('uname', $req->uname);

        // if($req->session()->has('uname'))
        // {
            
        // }
        // else
        // {
        //     $req->session()->flash('msg','Invalid Username or Password!');
        //     return redirect ('/login');
        // }
       
       
       // return view('user.create');
    }

    public function insert(Request $req)
    {
    //     DB::table('user_table')          
    //         ->insert(['uname' => $req->uname, 'password' => $req->password, 'email' => $req->email ]);

       
    //    return redirect()->route('user.viewAllUser');

    }

    public function details($id,Request $req)
    {

        if($req->session()->has('name'))
        {
            
            $user = User::find($id);
            return view('user.details')->with('user',$user);
            
        }
        
        else
        {
            $req->session()->flash('msg','Invalid Username or Password!');
            return redirect ('/login');
        }


        
    }

    public function edit(Request $req, $id)
    {
        // $admin = User::find($id);
        // return view('admin.editProfile')->with('admin',$admin);
        //return view('admin.editProfile');

            $a_id = $req->session()->get('id');
            $a_name = $req->session()->get('name');
            $a_password = $req->session()->get('password');
            $a_email = $req->session()->get('useremail');

        return view('admin.editProfile')
        ->with('id',$a_id)
        ->with('name',$a_name)
        ->with('password',$a_password)
        ->with('useremail',$a_email);

        $adminEdit = DB::table('user')
            ->where('id', $id);
            return view('admin.editProfile');

        
    }

    public function update(Request $req, $id)
    {
        
        // DB::table('user')
        //     ->where('id', $id)
        //     ->update(['name' => $req->name, 'password' => $req->password, 'useremail' => $req->useremail ]);

       // return view('user.edit')->with('user',$user);
       return redirect()->route('admin.home');
    }

    public function delete($id)
    {
        // $user = User::find($id);
        // return view()->route('user.delete')->with('user',$user);
    }

    public function destroy(Request $req, $id)
    {
        // DB::table('user_table')
        //     ->where('id', $id)
        //     ->delete();

        //     return redirect()->route('user.viewAllUser');
    }

    public function view(Request $req)
    {
        // $admins = DB::table('user')->get();
      
        // return view ('admin.adminPanel')->with('adminList',$admins);
        
        $admins = User::where('usertype', 'admin')->get();
        
        return view ('admin.adminPanel')->with('adminList',$admins);
    }

    

    

    public function adminPanel()
    {
        

            return redirect()->route('user.viewAllUser');
            $a_id = $req->session()->get('id');
            $a_name = $req->session()->get('name');
            $a_password = $req->session()->get('password');
            $a_email = $req->session()->get('useremail');

        return view('admin.view')
        ->with('id',$a_id)
        ->with('name',$a_name)
        ->with('password',$a_password)
        ->with('useremail',$a_email);

        
    }

    public function viewCreators()
    {
        
        //$admins = User::all();
        $admins = User::where('usertype', 'creator')->get();
        //$admins = DB::table('user')->where('usertype', 'creator')->get();
        //$admins = DB::select("select * from user where usertype = creator");
        
        return view ('admin.viewCreator')->with('adminList',$admins);
    }

    public function viewCollectors()
    {
        $admins = User::where('usertype', 'collector')->get();
        
        return view ('admin.viewCollector')->with('adminList',$admins);
    }

    

    
}
