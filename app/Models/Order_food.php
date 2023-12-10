<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_food extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'food_id',
        'amount',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function alcohol() {
        return $this->belongsTo(Food::class);
    }
}
