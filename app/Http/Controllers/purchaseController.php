<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class purchaseController extends Controller
{
    public function verifyPurchase(Request $req, $id){
        
        $offeredValue = $req->givenvalue;
        
        $item = DB::table('nft')
                ->where('id', $id)->first();

        if($offeredValue >= ($item->value)){
            echo "Congratulations!! You have Owned the NFT";
            echo $offeredValue;
            echo $item->value;
        }
        else{
            echo "Sorry You cannot own this with the price you offered";
            echo $offeredValue;
            echo $item->value;
        }
        //return view('collector.details')->with('item', $item);

    }
}
