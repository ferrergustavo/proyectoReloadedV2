<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Brand;
use App\Cart;

class Product extends Model
{
    protected $fillable = [
        'name_p','description','price','stock','img_p','img2','img3','img4','category_id','brand_id','new',
    ];

    public function cart(){
        return $this->belongsToMany(Cart::class)->withPivot('carts_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
      }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
