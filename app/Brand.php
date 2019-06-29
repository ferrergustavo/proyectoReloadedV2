<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name_b',
    ];
    public function product(){
        return $this->belongsTo('app\Product');
    }
}
