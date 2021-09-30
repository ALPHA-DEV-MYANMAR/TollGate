<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TC_login extends Controller
{
    public function __construct()
    {
        $this->middleware('IsTc');
    }

    public function login(){
        
        return redirect('/tollcollectors');
    }
}
