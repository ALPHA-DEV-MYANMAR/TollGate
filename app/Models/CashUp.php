<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'vehicle_count',
        'computer_total_fees',
        'cashup_total_fees'
    ];
    
}
