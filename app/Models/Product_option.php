<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_option extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_id',
        'color_id',
        'configuration_id',
        'quantity',
        'price'
    ];
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
