<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User,App\Models\CarClass,App\Models\TollCollector;

class ApiController extends Controller
{
    public function index(){
        $tollcollectordata = TollCollector::all();

        return response()->json($tollcollectordata);
    }
}
