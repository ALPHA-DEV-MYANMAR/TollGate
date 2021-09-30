<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User,App\Models\TollCollector,App\Models\Role;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('ismanager');
    }


    public function add(){

        $getuser = User::all();
        return view('IT.admin.adddata',compact('getuser'));
    }

    public function adddata(Request $request){

        $date = $request->year.'-'.$request->month.'-'.$request->day;
        $class = $request->class;
        $tc = $request->tc;
        $lane = $request->lane;
        $fees = $request->fees;

        if($class == 'CLASS-1'){
            $cls = '1';
            $money = "100";
            $la = '1';
        }
        if($class == 'CLASS-2'){
            $cls = '2';
            $money = "200";
            $la = '1';
        }
        if($class == 'CLASS-3'){
            $cls = '3';
            $money = "300";
            $la = '1';
        }
        if($class == 'CLASS-4'){
            $cls = '4';
            $money = "400";
            $la = '1';
        }
        if($class == 'CLASS-5'){
            $cls = '5';
            $money = "500";
            $la = '1';
        }
        if($class == 'CLASS-6'){
            $cls = '6';
            $money = "600";
            $la = '1';
        }
        if($class == 'CLASS-7'){
            $cls = '7';
            $money = "1000";
            $la = '1';
        }

        TollCollector::create([

            'tc_no' => $tc,
            'lane' => $la,
            'car_class' => $cls,
            'frees' => $money,
            'car_no' => 'no',
            'imp_car_img' => '',
            'out_car_img' => '',
            'data_time' => $date,
        ]);

        return back();

    }

    public function create(){
        
        return view('IT.admin.create');
    }

    public function store(Request $request){

        
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' =>  Hash::make($request->password)
            // 'password' => $request->password,
        ]);

        return back();
    }

    public function edit_user(){

        $users = User::simplePaginate(7);

        $permissions = Role::all();

        return view('IT.admin.edit_user',compact('users','permissions'));
    }

    public function manage_user($id){

        $manage_user = User::find($id);

        $roles = Role::all();

        return view('IT.admin.manage_user',compact('manage_user','roles'));
    }

    public function manage(Request $request,$id){

        $user = User::find($id);
        $role_id = $request->role_id;

        $user->roles()->sync($role_id);

        return redirect('/edit_user');
    }
}
