<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alc_percent',
        'made_in',
        'price',
        'photo'
    ];
}