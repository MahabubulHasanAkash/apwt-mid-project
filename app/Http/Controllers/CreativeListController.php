<?php

namespace App\Http\Controllers;

use App\Models\Creative;
use Illuminate\Http\Request;

class CreativeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // session()->pull('user');
        // session()->pull('userid');
        if (session()->has('userid')) {
            $creatives = Creative::latest()->paginate(5);
            return view('pages.creative_list', ['creatives' => $creatives]);
        }
        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_creative');
        // if (session()->has('userid')) {
        //     return view('pages.create_creative');
        // }
        // return redirect('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('creative');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $status = $request->status;

        $userid = session('userid');

        $creative = new Creative();
        $creative->userid = 2;
        $creative->name = $name;
        $creative->url = $imageName;
        $creative->description = $description;
        $creative->price = $price;
        $creative->status = $status == 1 ? true : false;

        $creative->save();

        // return redirect('creative-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function show(Creative $creative)
    {
        if (session()->has('userid')) {
            return view('pages.create_creative', [['creatives' => $creative]]);
        }
        return redirect('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $creative = Creative::find($id);
        // dd($creative);
        return view('pages.edit_creative', ['creative' => $creative]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creative $creative)
    {
        $image = $request->file('creative');

        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        }

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $status = $request->status;

        $userid = session('userid');

        $creative = Creative::find($request->id);
        $creative->userid = $userid;
        $creative->name = $name;
        if ($image) {
            $creative->url = $imageName;
        }
        $creative->description = $description;
        $creative->price = $price;
        $creative->status = $status == 1 ? true : false;

        $creative->save();

        return redirect('creative-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creative = Creative::find($id);
        unlink(public_path('images') . '/' . $creative->url);
        $creative->delete();
        return redirect('creative-list');
    }
}
