<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarClassControl extends Model
{
    use HasFactory;

    protected $fillable = [
        'classone',
        'classtwo',
        'classthree',
        'classfour',
        'classfive',
        'classsix',
        'classseven',
    ];

}
