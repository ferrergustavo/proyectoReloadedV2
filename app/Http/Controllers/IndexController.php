<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Product;
use DB;

use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{

    public function home(){
        $brands=Brand::all();
        $productsMouse=Product::where('category_id','1')->orderBy(DB::raw('RAND()'))->take(3)->get();
        $productsTeclado=Product::where('category_id','2')->orderBy(DB::raw('RAND()'))->take(3)->get();;
        $productsAuriculares=Product::where('category_id','3')->orderBy(DB::raw('RAND()'))->take(3)->get();;
       
        return view('index',compact('brands','productsMouse','productsTeclado','productsAuriculares'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function productB($id){
        $brands = Brand::All();
        $products = Product::where('brand_id','=',$id)->paginate(6);
        
        return view('productos',compact('brands','products'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
}
