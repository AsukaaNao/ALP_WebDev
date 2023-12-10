<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email'
    ];

    public function alcohol_supplier() {
        return $this->hasMany(Alcohol_supplier::class);
    }
}
