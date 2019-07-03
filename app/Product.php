<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_p','description','price','stock','img_p','category_id','brand_id','new',
    ];

    public function cart(){
        return $this->belongsToMany('Cart::class')->withPivot('carts_id');
    }
    public function user(){
        return $this->belongsTo('User::class');
    }
    public function category(){
        return $this->belongsTo('Category::class');
      }
    public function brand(){
        return $this->belongsTo('Brand:class');
    }
}
