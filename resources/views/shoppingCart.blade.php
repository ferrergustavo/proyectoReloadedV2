@extends('layouts.cart')
@section('content')
   <div class="divCart">
        <h1 class="h1Cart">Checkout Carrito</h1>
        <hr>
    <section class="sectionCart">
       <article class="articleCart">
           @if(isset($cart->items))
        <div class="containeritems">
            @foreach($cart->items as $item)
                <div class="containerItem">
                <h5 class="itemCarrito"><img class="imgProdCart" src="{{Storage::url($item['item']->img_p)}}" alt="img_p">{{ $item['item']->name_p .' '.'x'.' '.$item['qty'].'..................'.' '.'$'.$item['price'] }}</h5>
                </div>
             @endforeach
             </div>
        @endif
        </article>
        </section>
        
        <h3 class="cantidadesTotal">Productos en carrito: {{ $cart->totalQty }}</h3>
        <hr>
        <h3 class="cantidadesTotal">TOTAL: {{ $cart->totalPrice }}</h3>
        <hr>
        </div>
    
@endsection