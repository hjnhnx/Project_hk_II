<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'firstname',
        'lastname',
        'avatar',
        'address',
        'phone',
        'birthday',
        'email',
        'password',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
