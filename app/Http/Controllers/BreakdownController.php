<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use App\Models\Creative;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BreakdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        // $from = date($req->from);
        // $to = date($req->to);
        // $st = $req->status ?? "";

        $from = '2021-06-01';
        $to = '2021-06-30';

        // dd(date('Y'));

        if ($from) {
            // $users = User::select(DB::raw("COUNT(*) as count"))
            // ->whereYear('created_at', date('Y'))
            // ->groupBy(DB::raw("Month(created_at)"))
            // ->pluck('count');

            $creatives = Creative::select(DB::raw('status'), DB::raw("COUNT(*) as count"))
                ->whereBetween('created_at', [$from, $to])
                ->groupBy("status")
                ->get();
            // ->pluck('dates');

            // dd($creatives);
            $datas = [];
            foreach ($creatives as $index => $creat) {
                $ff = new Breakdown();
                $ff->name = $creat->status == 1 ? "Available" : "Out Of Stock";
                $ff->y = $creat->count;
                $ff->drilldown = $creat->status == 1 ? "Available" : "Out Of Stock";

                $datas[$index] = $ff;
            }

            // dd($datas);
            return view('pages.brackdown.product_brackdown', ['creatives' => $datas, 'from' => $from, 'to' => $to]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function show(Breakdown $breakdown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function edit(Breakdown $breakdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breakdown $breakdown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breakdown $breakdown)
    {
        //
    }
}
