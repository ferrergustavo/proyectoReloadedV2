<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name_c',
    ];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
