<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;

class admProductController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::All();
        $brands=Brand::All();
        $products=Product::orderBy('name_p')->get();
        
        return view('adm.products.index',compact('categories','brands','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::All();
        $categories=Category::All();
        $products=Product::all();
        return view('adm.products.create',compact('brands','categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name_p" => 'required|unique:products',
            "description"  => 'required',
            "price" => 'required|integer',
            "stock" => 'required|integer',
            "category_id" => 'required',
            "brand_id" => 'required',
            "img_p"=> 'image',
            "nameImg"=>'required|alpha_num',
        ]);
        $product = new Product([
            'name_p' => $request->input("name_p"),
            'description' => $request->input("description"),
            'price' => $request->input("price"),
            'stock' => $request->input("stock"),
            'category_id' => $request->input("category_id"),
            'brand_id' => $request->input("brand_id"),
            'img_p'=>'storage/products/'.$request->input("nameImg"),
            'new'=>false,
        ]);
        
        $nameImg = $request->input("nameImg");

        $path = $request->file('img_p');

        $extension = $request->file('img_p')->extension();

        if (!is_null($path)) {
            $path->storeAs('public/products',$nameImg.'.'.$extension);
            }

        $product->save();
        return redirect('/adm');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('adm.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::find($id);   
        $categories=Category::All();
        $brands=Brand::All();
        return view('adm.products.edit',compact('products','categories','brands'));
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
        $this->validate($request, [
            "name_p" => 'required|string|max:255',
            "description"  => 'required|string',
            "price" => 'required|integer',
            "stock" => 'required|integer',
            "category_id" => 'required',
            "brand_id"=>'required',
            "img_p"=> 'image',
            "nameImg"=>'required|alpha_num',
        ]);
        $product=Product::find($id);
        
            $product->name_p = $request->input('name_p');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->stock = $request->input('stock');
            $product->category_id = $request->input('category_id');
            $product->brand_id = $request->input('brand_id');
            
            $nameImg = $request->input('nameImg');
            
            $path = $request->file('img_p');
            $extension = $request->file('img_p')->extension();

            if (!is_null($path)) {
                $imgFinal = $path->storeAs('public/products',$nameImg.'.'.$extension);
                $product->img_p = $imgFinal;
                }
            
            $product->new=false;
            $product->save();

            return redirect('/admProduct');



        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admProduct');
    }

    public function adm(){
        return view('adm.adm');
    }

    public function brand(){
        return view('adm.products.brand');
    }

    public function createBrand(Request $request){
        $this->validate($request, [
            "name_b" => 'required|unique:brand|string',
        ]);
        $brand = new Brand([
            'name_b' => $request->input("name_b"),
        ]);

        $brand->save();
        return redirect('/admProduct');
    }
}
