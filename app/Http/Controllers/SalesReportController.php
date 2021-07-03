<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use File;

class SalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);

        if ($request->from) {
            $sales = Sales::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();

            // dd($sales);
            $total = $sales
                ->sum(function ($t) {
                    return $t->unit * $t->unit_price;
                });
            return view('pages.information.sales', ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $sales = Sales::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        $total = $sales->sum(function ($t) {
            return $t->unit * $t->unit_price;
        });
        return view('pages.information.sales', ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total]);
    }

    public function demand()
    {
        return view('pages.information.demand');
    }

    public function sales_report()
    {
        $sales = Sales::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = Sales::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months as $index => $month) {
            $datas[$month] = $sales[$index];
        }

        return view('pages.brackdown.sales', ['sales' => $datas]);
    }

    public function pdf_download(Request $request)
    {

     
    //   dd($request->from);


        $from = date($request->from);
        $to = date($request->to);

        $sales = Sales::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();

        $total = $sales
            ->sum(function ($t) {
                return $t->unit * $t->unit_price;
            });

            
        //    $pdf= PDF::loadView('pdf.sales_repo', compact('sales','total'))->save($invoicePath);
           $pdf= PDF::loadView('pdf.sales_repo', compact('sales','total'));
            return $pdf->download('sales.pdf');
    

        // dd($sales);

        // share data to view
        // view()->share('sales', ['sales' => $sales, 'total' => $total]);
        //$pdf = PDF::loadView('pdf.sales_repo', ['sales' => $sales, 'total' => $total]);
        // Storage::put("pdffile.pdf", $pdf->output());

        // $pdf = PDF::

        // dd($pdf);
        // download PDF file with download method
       // return $pdf->download("iiiittsale.pdf");

        // return response($pdf, 200)
        //             ->header('Content-Type', File::mimeType($pdf));
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
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
