<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buah extends Model
{
    protected $table = 'buah'; 
    protected $fillable = [
        'nama', 'price', 'stock'
    ];
}
