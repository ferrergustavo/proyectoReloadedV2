@extends('layouts.admProducts')
@section('admProduct')
<div>
    <section class="containerAdmUserShow">
        <article class="articleAdmUserShow">
            <section>
            <a href="../../admProduct" class="aReturn"><- Return</a>
            </section> 
            <section>
                <article>
                    <h3 class="h3AdmUserShow">{{$product->name_p}}</h3>
                    <hr>
                    <dl class="dlAdmUserShow">
                        <dt>Descripción:</dt>
                        <dd>-{{$product->description}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Marca:</dt>
                        <dd>-{{$product->brand['name_b']}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Categoría:</dt>
                        <dd>{{$product->category['name_c']}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow"> 
                        <dt>Precio:</dt>
                        <dd>${{$product->price}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Stock:</dt>
                        <dd> {{$product->stock}}</dd>
                    </dl>
                    <hr>
                </article> 
                <section>
                <article class="article2AdmUserShow">
                <form method="GET" action="../edit/{{$product->id}}">
                    <button type="submit" id="edit" class="btnAdmUserShow">Editar</button>
                </form>
                    <form method="POST" action="../{{$product->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" id="eliminar" class="btnAdmUserShow">eliminar</button>
                        <!--<a href="" id="eliminar">eliminar</a> -->
                      </form>
                </article>
            </section> 
            </section> 
        </article>
    </section>
</div>   
@endsection