<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcohol_supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'alcohol_id',
        'supplier_id',
        'buyprice'
    ];
}
