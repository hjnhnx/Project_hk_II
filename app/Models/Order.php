<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'ship_name',
        'ship_phone',
        'ship_email',
        'ship_address',
        'note',
    ];

    public function users(){
        return $this->belongsTo(User::class,'users_id');
    }

    public function order_detail(){
        return $this->hasMany(Order_Detail::class);
    }


}
