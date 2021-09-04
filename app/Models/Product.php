<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'discount',
        'category_id',
        'brand_id',
        'slug',
        'price',
        'content_detail',
        'thumbnail',
        'images',
    ];
    public function product_option(){
        return $this->hasMany(Product_option::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
