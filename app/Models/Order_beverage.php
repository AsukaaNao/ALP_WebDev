<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_beverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'beverage_id',
        'amount'
    ];
}
