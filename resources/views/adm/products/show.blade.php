@section('content')
<div>
    <section>
        <article>
            <section>
                <article>
                    <a href="{{route('products.edit', ['id' => $product->id])}}">Editar</a>
                    <a href="{{route('products.delete', ['id' => $product->id])}}">Eliminar</a>
                    <a href="{{route('products.index')}}">Index Productos</a>
                </article>
            </section> 
            <section>
                <article>
                    <h3>{{$product->name_p}}</h3>
                    <hr>
                    <dl>
                        <dt>Descripción</dt>
                        <dd><p>{{$product->description}}</p></dd>
                    </dl>
                    <dl>
                        <dt>Marca</dt>
                        <dd>{{$product->brand['name_b']}}</dd>
                    </dl>
                    <dl>
                        <dt>Categoría</dt>
                        <dd>{{$product->category['name_c']}}</dd>
                    </dl>
                    <dl>
                        <dt>Precio</dt>
                        <dd>$ {{$product->price}}</dd>
                    </dl>
                    <dl>
                        <dt>Cantidad</dt>
                        <dd>{{$product->stock}}</dd>
                    </dl>
                    <hr>
                </article> 
            </section> 
        </article>
    </section>
</div>   
@endsection