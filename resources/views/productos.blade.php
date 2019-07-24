@extends('layouts.products')
@section('content')
    <h1 class="h1MTA">PRODUCTOS:</h1>
<div id="productsMTA" class="productsMTA">
    @foreach($products as $product)
    <div class="productMTA">      
                    <img class="" src="{{Storage::url($product->img_p)}}" alt="1 slide"></<img>
                    <div class="description">
                    <p class="item">{{$product->name_p}}</p>
                    <p>Price: <em>${{$product->price}}</em></p>
                    <a class="agregarBtn" href= "addToCart/{{$product->id}}"> Agregar al carrito </a> 
                </div>
            </div>     
     @endforeach
     </div>

    </section>
    

    
    </body>
@endsection

