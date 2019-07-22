<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function show(){
        return view ('searchResults');
    }

    public function search(Request $request){
        $input = $request->input('busqueda');
        $products = Product::where('name_p','LIKE','%'.$input.'%')->paginate(8);
        return view('searchResults')->with("products", $products);
    }

}




