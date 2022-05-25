<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Product => products
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'price',
        'sale_price',
        'category_id',
        'desr',
        'image',
        'image_list'
    ];

    public function cat()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }


    public function scopeSale($query, $limit = 6)
    {
        return $query->orderBy('id','DESC')->where('sale_price','>',0)->limit($limit)->get();
    }
}