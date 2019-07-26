<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class FaqsController extends Controller
{
    public function index(){
        $brands = Brand::All();
        return view ('faqs')->with('brands',$brands);
    }
}
