<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_p','description','price','stock','img_p','category_id','brand_id','new',
    ];

    public function user(){
        return $this->belongsToMany('app\User')->withPivot('users_id');
    }
    public function category(){
        return $this->hasMany('app\Category');
      }
    public function brand(){
        return $this->hasMany('app\Brand');
    }
}
