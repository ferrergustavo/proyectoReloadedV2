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
            "img_p"=> 'image|required',
            "img2"=>'image|nullable',
            "img3"=>'image|nullable',
            "img4"=>'image|nullable',
            "nameImg_p"=>'alpha_num|nullable',
            "nameImg2"=>'alpha_num|nullable',
            "nameImg3"=>'alpha_num|nullable',
            "nameImg4"=>'alpha_num|nullable',
        ]);
        $product = new Product([
            'name_p' => $request->input("name_p"),
            'description' => $request->input("description"),
            'price' => $request->input("price"),
            'stock' => $request->input("stock"),
            'category_id' => $request->input("category_id"),
            'brand_id' => $request->input("brand_id"),
            'new'=>false,
        ]);
        
        $nameImg_p = $request->input("nameImg_p");
        $nameImg2=$request->input('nameImg2');
        $nameImg3=$request->input('nameImg3');
        $nameImg4=$request->input('nameImg4');

        $path = $request->file('img_p');
        if($path!=null){
        $extension = $request->file('img_p')->extension();
        }
        $path2 = $request->file('img2');
        if($path2!=null){
        $extension2 = $request->file('img2')->extension();
        }
        $path3 = $request->file('img3');
        if($path3!=null){
        $extension3 = $request->file('img3')->extension();
        }
        $path4 = $request->file('img4');
        if($path4!=null){
        $extension4 = $request->file('img4')->extension();
        }

        if (!is_null($path)) {
           $imgFinal=$path->storeAs('public/products',$nameImg_p.'.'.$extension);
           $product->img_p = $imgFinal;
            }
        if (!is_null($path2)) {
            $imgFinal2 = $path2->storeAs('public/products',$nameImg2.'.'.$extension2);
            $product->img2 = $imgFinal2;
            }

        if (!is_null($path3)) {
            $imgFinal3 = $path3->storeAs('public/products',$nameImg3.'.'.$extension3);
            $product->img3 = $imgFinal3;
            }

        if (!is_null($path4)) {
            $imgFinal4 = $path4->storeAs('public/products',$nameImg4.'.'.$extension4);
            $product->img4 = $imgFinal4;
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
            "img_p"=> 'image|nullable',
            "img2"=>'image|nullable',
            "img3"=>'image|nullable',
            "img4"=>'image|nullable',
            "nameImg"=>'alpha_num|nullable',
            "nameImg2"=>'alpha_num|nullable',
            "nameImg3"=>'alpha_num|nullable',
            "nameImg4"=>'alpha_num|nullable',
        ]);
        $product=Product::find($id);
        
            $product->name_p = $request->input('name_p');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->stock = $request->input('stock');
            $product->category_id = $request->input('category_id');
            $product->brand_id = $request->input('brand_id');
            
            $nameImg_p = $request->input('nameImg_p');
            $nameImg2=$request->input('nameImg2');
            $nameImg3=$request->input('nameImg3');
            $nameImg4=$request->input('nameImg4');

            
            $path = $request->file('img_p');
            if($path!=null){
            $extension = $request->file('img_p')->extension();
            }
            $path2 = $request->file('img2');
            if($path2!=null){
            $extension2 = $request->file('img2')->extension();
            }
            $path3 = $request->file('img3');
            if($path3!=null){
            $extension3 = $request->file('img3')->extension();
            }
            $path4 = $request->file('img4');
            if($path4!=null){
            $extension4 = $request->file('img4')->extension();
            }

            if (!is_null($path)) {
                $imgFinal = $path->storeAs('public/products',$nameImg_p.'.'.$extension);
                $product->img_p = $imgFinal;
                }
            
            if (!is_null($path2)) {
                $imgFinal2 = $path2->storeAs('public/products',$nameImg2.'.'.$extension2);
                $product->img2 = $imgFinal2;
                }

            if (!is_null($path3)) {
                $imgFinal3 = $path3->storeAs('public/products',$nameImg3.'.'.$extension3);
                $product->img3 = $imgFinal3;
                }

            if (!is_null($path4)) {
                $imgFinal4 = $path4->storeAs('public/products',$nameImg4.'.'.$extension4);
                $product->img4 = $imgFinal4;
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
