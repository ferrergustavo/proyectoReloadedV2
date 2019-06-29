<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_p','description','price','stock','img_p','category_id','brand_id','new',
    ];

}
