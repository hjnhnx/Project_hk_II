<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_option extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'color_id',
        'configuration_id',
        'quantity',
        'price'
    ];
}
