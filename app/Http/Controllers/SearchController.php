<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class SearchController extends Controller
{
    public function show(){
        return view ('searchResults');
    }

    public function search(Request $request){
        $brands=Brand::All();
        $input = $request->input('busqueda');
        $products = Product::where('name_p','LIKE','%'.$input.'%')->get();
        if(count($products)>0){
            return view('searchResults',compact('brands','products','input'));
        }else{
            return view('noResult')->with('brands',$brands);
        }
    }

}




