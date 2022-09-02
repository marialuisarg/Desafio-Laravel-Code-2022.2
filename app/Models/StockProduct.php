<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockProduct extends Model
{
    use HasFactory;

    protected $table = 'stock';

    protected $guarded = [];  

    public function produto() 
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
