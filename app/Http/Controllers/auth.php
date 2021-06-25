<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class auth extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function verifylogin(LoginRequest $req)
    {

        $userCount = DB::table('user')
            ->where('email', $req->email)
            ->count();
        if ($userCount > 0) {
            $user = DB::table('user')
                ->where('email', $req->email)
                ->first();
            if (password_verify($req->password, $user->password)) {
                $usertype =  $user->usertype;
                $req->session()->put('useremail', $req->email);
                $req->session()->put('usertype', $usertype);
                return redirect('/' . $usertype . '/home');
            } else {
                $req->session()->flash('msg', 'Wrong Credentials');
                return redirect('/login');
            }
        } else {
            $req->session()->flash('msg', 'Please register first');
            return redirect('/login');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/login');
    }
}
