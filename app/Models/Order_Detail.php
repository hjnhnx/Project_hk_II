<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Detail extends Model
{
    use HasFactory,SoftDeletes;
    public $table = 'order_details';
    protected $fillable = [
        'product_option_id',
        'order_id',
        'quantity',
        'unit_price'
    ];
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function product_option(){
        return $this->belongsTo(Product_option::class);
    }
}
