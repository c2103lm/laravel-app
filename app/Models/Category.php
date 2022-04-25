<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $table = 'danh_muc';
    protected $fillable = ['name','status'];
    // 1 category - n product
    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }

    public function scopeSearch($query)
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }

    public function scopeAdd()
    {
        return $this->create(request()->only('name','status'));
    }

    public function scopeUpdateCategory()
    {
        return $this->update(request()->only('name','status'));
    }
}
