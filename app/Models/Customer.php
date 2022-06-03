<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isFavorited($product_id)
    {

        return $this->hasOne(Favotite::class, 'customer_id','id')->where('product_id', $product_id)->first();

        return false;
    }


    public function favorites()
    {
        return $this->belongsToMany(Product::class,'favotites');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'customer_id','id');
    }
}