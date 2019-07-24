<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;
use App\Brand;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::All();
        return view ('productos')->with('brands',$brands);
    }

    public function productInfo(){
        return view ('productosInfo');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admProductNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $brands=Brand::All();
        $products = Product::find($id);
        return view ('infoProduct',compact('brands','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



public function getIndex()
    {
        $products = Product::all(); 
        $products=\App\Product::paginate(4);
        $brands=Brand::All();
        $cart = Session::get('cart');

        return view('productos',compact('products','brands','cart'));
    }

    public function getAddToCart(Request $request, $id)
    {
        $product= Product::find($id);

        $cart = session()->get('cart');

        $new = $cart->add($product);

        session()->put('cart', $new);

        return redirect()->route('product.index');
    }
    public function productSelectT(){
        $brands=Brand::All();
        $products=Product::where('category_id','=',2)->paginate(4);
        return view('teclado',compact('brands','products'));
    }
    public function productSelectA(){
        $brands=Brand::All();
        $products=Product::where('category_id','=',3)->paginate(4);
        return view('auriculares',compact('brands','products'));
        
    }
    public function productSelectM(){
        $brands=Brand::All();
        $products=Product::where('category_id','=',1)->paginate(4);
        
        return view('mouse',compact('brands','products'));
        
    }

}
