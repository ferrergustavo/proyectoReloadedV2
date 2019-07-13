@extends('admProducts')

@section('admProduct')
<section>
                <h1>ADMINISTRAR PRODUCTOS</h1>
                <hr>
         <div class="">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Productos</th>
              <th scope="col">Agregar</th>
              <th scope="col">Modificar</th>
              <th scope="col">Borrar</th>
            </tr>
          </thead>
          <tbody>
              @foreach($products as $product)
                <tr>
                  <th>{{$product->product_id}}</th>
                  <td>nombre={{$product->name_p}}       -       price={{$product->price}}       -       stock={{$product->stock}}</td>
                  <td>
                        <a href="">agregar</a>
                  </td>
                  <td>
                        <a href="">modificar</a> 
                  </td>
                  <td>
                        <a href="">eliminar</a>
                  </td>
                </tr>
                  @endforeach
              </tbody>
          </div>
    </div>
</section>
@endsection