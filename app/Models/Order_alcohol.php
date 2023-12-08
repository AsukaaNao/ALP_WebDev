<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_alcohol extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'alcohol_id',
        'amount'
    ];
}
