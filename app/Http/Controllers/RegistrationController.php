<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('pages.member.members', ['users' => $users]);
        // if (session()->has('userid')) {

        // }
        // return view('pages.registration');
    }

    public function create()
    {
        $roles = Role::get();
        return view('pages.member.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'conpassword' => 'required'
        ]);

        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->image = $imageName;
        $user->password = $request->password;
        $user->roles_id = $request->role;

        $user->save();

        // $request->session()->put('userid', $user['id']);
        // $request->session()->put('user', $user);

        return redirect('/members/list');
    }

    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        return view('pages.member.update', ['user' => $user, 'roles' => $roles]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);


        $image = $request->file('file');

        if ($image) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        }

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if ($image) {
            $user->image = $imageName;
        }
        $user->roles_id = $request->role;

        $user->save();

        // $request->session()->put('userid', $user['id']);
        // $request->session()->put('user', $user);

        return redirect('/members/list');
    }

    public function delete($id)
    {
        $user = User::find($id);
        unlink(public_path('images') . '/' . $user->image);
        $user->delete();
        return redirect('/members/list');
    }

    public function logout()
    {
        echo 'logout';
        if (session()->has('userid')) {
            session()->pull('userid');
            session()->pull('user');
        }

        return redirect('login');
    }
}
