<?php

namespace App\Http\Controllers;

use App\Models\CashUp,App\Models\TollCollector,App\Models\CompressiveTotal;
use Illuminate\Http\Request;

class CashUpController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function CashUp(Request $request){

        $year = $request->year;
        $month = $request->month;
        $day = $request->day;

        $class_one = $request->class_one;
        $class_two = $request->class_two;
        $class_three = $request->class_three;
        $class_four = $request->class_four;
        $class_five = $request->class_five;
        $class_six = $request->class_six;
        $class_seven = $request->class_seven;


        //Cash up
        $date = $year.'-'.$month.'-'.$day;
        $date_with_data = TollCollector::where('data_time',$date)->get();


        $vehicle_count = $date_with_data->count('car_class');
        $computer_total_fees = $date_with_data->sum('frees');
        $cash_up_total_fees = $class_one+$class_two+$class_three+$class_four+$class_five+$class_six+$class_seven;

        CashUp::create([
            'date' => $date,
            'vehicle_count' => $vehicle_count,
            'computer_total_fees' => $computer_total_fees,
            'cashup_total_fees' => $cash_up_total_fees,
        ]);

        return redirect('/summary');
    }
}
