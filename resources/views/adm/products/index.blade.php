@extends('layouts.admProducts')

@section('admProduct')
<div class="DivPro">
<section class="sectionAdmProduct">
  <a href="adm" class="aReturn"><- Return</a>
  <h1 class="h1AdmProduct">ADMINISTRAR PRODUCTOS</h1>
                <hr class="hrAdmProduct">
                {{$products->links()}}
         <div class="containerAdmProduct">
           <a href="admProduct/create" class="aNewProduct">New Product</a>
           |
           <a href="admProduct/newBrand" class="aNewProduct">New Brand</a>
        <table class="table">
          <thead>
            <tr class="trAdmProduct">
              <th scope="col">#</th>
              <th scope="col">Productos</th>
              <th scope="col">Modificar</th>
              <th scope="col">Borrar</th>
              <th scope="col">+Info</th>
            </tr>
          </thead>
          <tbody>
              @foreach($products as $product)
                <tr>
                  <th>{{$product->product_id}}</th>
                  <td class="tdAdmProduct">nombre= {{$product->name_p}}       -       price= {{$product->price}}       -       stock= {{$product->stock}}</td>
                  <td class="tdAdmProduct">
                        <a href="admProduct/edit/{{$product->id}}">modificar</a> 
                  </td>
                  <td class="tdAdmProduct">
                  <form id='form-delete' class='form-delete' action="admProduct/{{$product->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" id="eliminar" class="eliminarAdmUser">eliminar</button>
					</form>
                  </td>
                  <td class="tdAdmProduct">
                        <a href="admProduct/show/{{$product->id}}">+Info</a>
                  </td>
                </tr>
                  @endforeach
              </tbody>
          </div>
    </div>
</section>
</div>
@endsection