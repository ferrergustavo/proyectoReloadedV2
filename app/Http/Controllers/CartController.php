<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class CartController extends Controller
{
    public function show(){ 

        $brands=Brand::All();

        return view ('shoppingCart', [
            'cart' => session('cart'),
            'brands' => $brands
        ]);  
    }
}
