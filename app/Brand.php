<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Brand extends Model
{
    protected $table= 'brand';
    protected $fillable = [
        'name_b',
    ];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
