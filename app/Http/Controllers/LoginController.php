<?php

namespace App\Http\Controllers;

use App\Models\Creative;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (session()->has('userid')) {

            return redirect('/members/list');
        }
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->get();
        if ($user->count() > 0) {
            $request->session()->put('userid', $user[0]['id']);
            $request->session()->put('user', $user[0]);
            return redirect('/members/list');
        } else {
            return redirect('login');
        }
    }
}
