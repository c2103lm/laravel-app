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
        'image'
    ];
}
