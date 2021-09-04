<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'users_id',
        'total_price',
        'users_name',
        'phone',
        'email',
        'address',
        'note',
        'is_checkout'
    ];

    public function users(){
        return $this->belongsTo(User::class,'users_id');
    }

    public function order_detail(){
        return $this->hasMany(Order_Detail::class);
    }


}
