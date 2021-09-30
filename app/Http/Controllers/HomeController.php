<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarClass,App\Models\TollCollector,App\Models\User,App\Models\CarClassControl;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tollColData = TollCollector::all();

        return view('home',compact('tollColData'));
    }


    public function laneDetail(){

        $tollColData = TollCollector::simplePaginate(4);

        return view('IT.laneDetail',compact('tollColData'));
    }

    public function singleview($id){

        $singledata = TollCollector::find($id);

        return view('IT.singleview',compact('singledata'));
    }

    public function cashup(){

        $allcarclassamount = CarClassControl::all();

        $onesum = $allcarclassamount->sum('classone');
        $twosum = $allcarclassamount->sum('classtwo');
        $threesum = $allcarclassamount->sum('classthree');
        $foursum = $allcarclassamount->sum('classfour');
        $fivesum = $allcarclassamount->sum('classfive');
        $sixsum = $allcarclassamount->sum('classsix');
        $sevensum = $allcarclassamount->sum('classseven');

        $tolldata = TollCollector::all();
        $total = $tolldata->sum('frees');

        return view('IT.cashup',compact('onesum','twosum','threesum','foursum','fivesum','sixsum','sevensum','total'));

    }

    public function Search(Request $request){
        $day = $request->day;
        $month = $request->month;
        $year = $request->year;

        $tollColData =  TollCollector::where('data_time',$year.'-'.$month.'-'.$day)->simplePaginate(4);

        return view('IT.laneDetail',compact('tollColData'));

    }   

    public function SearchCompressive(Request $request){

        $day = $request->day;
        $month = $request->month;
        $year = $request->year;

        $TollColData =  TollCollector::where('data_time',$year.'-'.$month.'-'.$day)->get();//get all data with date


        $cone_date = $TollColData->pluck('data_time')->first();

        return $cone_date;
        
    }
}
