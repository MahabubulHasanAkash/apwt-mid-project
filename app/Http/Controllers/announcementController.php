<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;




class announcementController extends Controller
{
    public function insert(Request $req)
    {
        
        // DB::table('announcement')          
        // ->insert(['title' => $req->title, 'details' => $req->details ]);
        
        // return redirect()->route('admin.announcement');
        DB::table('announcement')->insert(
            array(
                'title' => $req->title,
                'details' => $req->details,
                
            )
        );
        return redirect('/admin/announcement');
    

    }


    public function view(Request $req)
    {
        
        // $a_id = $req->session()->get('id');
        //     $a_name = $req->session()->get('name');
        //     $a_password = $req->session()->get('password');
        //     $a_email = $req->session()->get('useremail');

        // return view('admin.announcement')
        // ->with('id',$a_id)
        // ->with('name',$a_name)
        // ->with('password',$a_password)
        // ->with('useremail',$a_email);

        // return view('admin.announcement');
        $announcements = Announcement::all();
        // $admins = DB::table('user')->where('usertype', 'admin')->first();
        
        return view ('admin.announcement')->with('announcementList',$announcements);
    }

    public function edit(Request $req, $id)
    {
        
        // DB::table('announcement')          
        // ->insert(['title' => $req->title, 'details' => $req->details ]);
        
        // return redirect()->route('admin.announcement');
        DB::table('announcement')
            ->where('id', $id)
            ->update();
            
        
        return redirect('/admin/announcement');
    

    }

    public function delete(Request $req, $id)
    {
        
        // DB::table('announcement')          
        // ->insert(['title' => $req->title, 'details' => $req->details ]);
        
        // return redirect()->route('admin.announcement');
        DB::table('announcement')
            ->where('id', $id)
            ->delete();
        
        return redirect('/admin/announcement');
    

    }
}
