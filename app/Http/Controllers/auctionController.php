<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Models\Auction;
use App\Models\Creation;

class auctionController extends Controller
{
    public function index()
    {
        $auctions = Auction::all();
        return view('creator.auction')->with("auctions", $auctions);
    }

    public function auction($id)
    {
        $auctions = DB::table('auction')
            ->where('creator_id', $id)
            ->get();
        return view('creator.onAuction')->with("auctions", $auctions);
    }

    public function editauction($id)
    {
        $auction = DB::table('auction')
            ->where('id', $id)
            ->get()
            ->first();
        $creation = DB::table('creation')
            ->where('id', $auction->creation_id)
            ->get()
            ->first();
        return view('creator.editAuction')->with('creation', $creation);
    }

    public function updateAuction($id)
    {
        $auction = DB::table('auction')
            ->where('id', $id)
            ->get();
        return view('creator.editAuction', $auction);
    }

    public function deleteauction($id)
    {
        DB::table('auction')
            ->where('id', $id)
            ->delete();
        return back();
    }
}
