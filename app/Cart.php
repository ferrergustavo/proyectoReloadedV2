<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'name_cart',
    ];

    public function product(){
        return $this->belongsToMany(Product::class)->withPivot('products_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
