<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtotal',
        'total',
        'qr'
    ];

    public function order_foods() {
        return $this->hasMany(Order_foods::class);
    }

    public function order_beverages() {
        return $this->hasMany(Order_beverages::class);
    }

    public function order_alcohols() {
        return $this->hasMany(Order_alcohols::class);
    }
}
