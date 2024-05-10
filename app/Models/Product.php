<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'images',
        'description',
        'price',
        'is-active',
        'is-fearured',
        'in-stock',
        'on-sale'
    ];
    protected $casts = [
         'images' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Category::class);
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
