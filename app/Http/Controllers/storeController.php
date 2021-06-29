<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class storeController extends Controller
{
    public function index()
    {
        $store = Store::all();
        return view('creator.store')->with("store", $store);
    }

    public function onsell($id)
    {
        $store = DB::table('store')
            ->where('creator_id', $id)
            ->get();
        return view('creator.onSell')->with("auctions", $store);
    }

    public function editsell($id)
    {
        return view('creator.onAuction');
    }

    public function deletesell($id)
    {
        DB::table('store')
            ->where('id', $id)
            ->delete();
        return back();
    }
}
