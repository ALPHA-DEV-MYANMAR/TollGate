<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TollCollector,App\Models\CarClass,App\Models\CarClassControl;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TollCollectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $date = Carbon::today()->toDateString();

        $car_class = CarClass::all();

        return view('TC.Tollcollector',compact('car_class','date'));

    }

    public function store(Request $request){
        
        $car_class = $request->class;

        $car_img = $request->file('image');
        $originalname = uniqid().'_'.$car_img->getClientOriginalName();
        $car_img->move('upload/img/',$originalname);


        if($car_class == 'CLASS-1'){

            CarClassControl::create([
                'classone' => '100',
                'classtwo' => '0',
                'classthree' => '0',
                'classfour' => '0',
                'classfive' => '0',
                'classsix' => '0',
                'classseven' => '0',
            ]);

            return $this->Helper('1','100','1',$originalname);

        }
        if($car_class == 'CLASS-2'){

            CarClassControl::create([
                'classone' => '0',
                'classtwo' => '200',
                'classthree' => '0',
                'classfour' => '0',
                'classfive' => '0',
                'classsix' => '0',
                'classseven' => '0',
            ]);

            return $this->Helper('1','200','2',$originalname);
        }
        if($car_class == 'CLASS-3'){

            CarClassControl::create([
                'classone' => '0',
                'classtwo' => '0',
                'classthree' => '300',
                'classfour' => '0',
                'classfive' => '0',
                'classsix' => '0',
                'classseven' => '0',
            ]);

            return $this->Helper('1','300','3',$originalname);
        }
        if($car_class == 'CLASS-4'){

            CarClassControl::create([
                'classone' => '0',
                'classtwo' => '0',
                'classthree' => '0',
                'classfour' => '400',
                'classfive' => '0',
                'classsix' => '0',
                'classseven' => '0',
            ]);

            return $this->Helper('1','400','4',$originalname);
        }
        if($car_class == 'CLASS-5'){

            CarClassControl::create([
                'classone' => '0',
                'classtwo' => '0',
                'classthree' => '0',
                'classfour' => '0',
                'classfive' => '500',
                'classsix' => '0',
                'classseven' => '0',
            ]);

            return $this->Helper('1','500','5',$originalname);
        }
        if($car_class == 'CLASS-6'){

            CarClassControl::create([
                'classone' => '0',
                'classtwo' => '0',
                'classthree' => '0',
                'classfour' => '0',
                'classfive' => '0',
                'classsix' => '600',
                'classseven' => '0',
            ]);

            return $this->Helper('1','600','6',$originalname);
        }
        if($car_class == 'CLASS-7'){

            CarClassControl::create([
                'classone' => '0',
                'classtwo' => '0',
                'classthree' => '0',
                'classfour' => '0',
                'classfive' => '0',
                'classsix' => '0',
                'classseven' => '1000',
            ]);

            return $this->Helper('1','1000','7',$originalname);
        }

        
    }

    //Upload to Database
    public function cash(Request $request){

        $car_class = CarClass::all();

        //Insert

        TollCollector::create([
            'tc_no' => $request->tc_no,
            'lane' => $request->lane,
            'car_class' => $request->car_class_lay,
            'frees' => $request->frees,
            'car_no' => $request->car_no,
            'imp_car_img' => $request->imp_car_img,
            'out_car_img' => '',
            'data_time' => $request->data_time,
        ]);

        return redirect('/tollcollectors')->with(compact('car_class'));
    }

    public function Helper($lane,$frees,$class,$img_url){

            $tc_no = Auth::user()->name ;
            $lane = $lane;
            $frees = $frees;
            $car_class_lay = $class;
            $imp_car_img = $img_url;
            $data_time = Carbon::today()->toDateString();

            return view('TC.Tollcollector2',compact('tc_no','lane','frees','car_class_lay','imp_car_img','data_time'));
    }

}
