<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CashUp;

class CashUpSummaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $getAllCashUp = CashUp::simplePaginate(6);

        return view('IT.cashupsummary',compact('getAllCashUp'));
    }

    public function summarySearch(Request $request){

        $day = $request->day;
        $month = $request->month;
        $year = $request->year;


        $getAllCashUp = CashUp::where('date',$year.'-'.$month.'-'.$day)->simplePaginate(6);


        return view('IT.cashupsummary',compact('getAllCashUp'));
    }
}
