<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TollCollector,App\Models\CashUp;
use Carbon\Carbon;

class IncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $date = Carbon::today()->toDateString();
    
        $income_data = CashUp::where('date',$date )->simplePaginate(1);

        return view('IT.income',compact('income_data'));
    }

    public function SearchIncome(Request $request){

        $day = $request->day;
        $month = $request->month;
        $year = $request->year;

        $date = $year.'-'.$month.'-'.$day;

        $income_data = CashUp::where('date',$date)->simplePaginate(1);

        return view('IT.income',compact('income_data'));

    }
}
