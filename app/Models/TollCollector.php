<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TollCollector extends Model
{
    use HasFactory;

    protected $fillable = [

        'tc_no',
        'lane',
        'car_class',
        'frees',
        'car_no',
        'imp_car_img',
        'out_car_img',
        'data_time'

    ];
}
