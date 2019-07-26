@extends('layouts.products')
@section ('content')
        <div class="h1Search">
            <h1>Buscaste:<strong>{{$input}}</strong></h1>    
        </div>
    <div id="productsMTA" class="productsMTA">
        @foreach($products as $product)
        <div class="productMTA">      
                    <img class="" src="{{Storage::url($product->img_p)}}" alt="1 slide"></<img>
                    <div class="description">
                    <p class="item">{{$product->name_p}}</p>
                    <p>Price: <em>${{$product->price}}</em></p>
                    <a class="" href= "addToCart/{{$product->id}}"> Agregar al carrito </a> 
                </div>
            </div>
        @endforeach
</div>
@endsection
@yield('footer') 
