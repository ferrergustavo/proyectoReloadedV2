@extends('layouts.infoP')
@section('InfoProduct')
</a></div>
    <div class="infoP">
        <div class="infoBody">
            <h1 class="h1Info">{{$products->name_p}}</h1>
            <img src="{{Storage::url($products->img_p)}}" alt="">
            <dl class="dlAdmUserShow">
                        <dt>Descripcion:</dt>
                        <dd>-{{$products->description}}</dd>
                    </dl>
            <dl class="dlAdmUserShow">
                        <dt>Marca:</dt>
                        <dd>-{{$products->brand['name_b']}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Categoría:</dt>
                        <dd>{{$products->category['name_c']}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow"> 
                        <dt>Precio:</dt>
                        <dd>${{$products->price}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Stock:</dt>
                        <dd> {{$products->stock}}</dd>
                    </dl>
                    <a class="addCartInfoP" href= "../addToCart/{{$products->id}}"> Agregar al carrito </a> 
        </div>
    </div>
@endsection