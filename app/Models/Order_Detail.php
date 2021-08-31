<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Detail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_option_id',
        'order_id',
        'quantity',
        'unit_price'
    ];
}
