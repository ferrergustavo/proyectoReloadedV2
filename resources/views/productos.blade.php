@extends('layouts.products')
@section('content')
    <div id="productosCont" class="productosCont">
    @foreach($products as $product)
        <div id="productinf" class="productinf">
        <a href="/productInfo">
        <img src='{{Storage::url($product->img_p)}}' alt="razer3">
         <h3> {{$product->price}}</h3>
         <h4> {{$product->name_p}}</h4>
        </a>
        </div>
        <a class="agregarBtn" href= "addToCart/{{$product->id}}"> Agregar al carrito </a>
    </article>
     
     @endforeach
     </div>

    </section>
    

    <div style="background:white; height: 100px; color: red;">
        Qty: {{ session('cart')->totalQty }}
        <hr>
        Price: {{ session()->get('cart')->totalPrice }}
        <hr>
     
    </div>
    </body>
@endsection

