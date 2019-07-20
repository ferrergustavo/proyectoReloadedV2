@extends('layouts.admProducts')

@section('admProductUpdate')
    <section class="sectionAdmUserEdit">
            <article class="articleAdmUserEdit">
                 <a href="../../admProduct" class="aReturn"><- Return</a>
                <h1 class="h1EditUser">Editar Producto <strong class="UserName"> {{$products->name_p}}</strong></h1>
                <div class="card-body">
                <form method="POST" action="{{route('editProduct',['id'=> $products->id])}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="inputsEditUser">
                            <label for="name_p">Nombre del Producto:</label>
                            <input name="name_p" type="text" id="name_p" value="{{$products->name_p}}"> <br>
                            <span class="errores">{{$errors->first('name_p')}} </span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="descripcion">descripcion del Producto:</label>
                            <input name="description" type="textarea" id="description" value="{{$products->description}}"> <br>
                            <span class="errores">{{$errors->first('description')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="confirmcontra">Precio:</label>
                            <input name="price" type="number" id="price" value="{{$products->price}}"> <br>
                            <span class="errores">{{$errors->first('price')}}</span>                      
                    </div><br>
                    <div class="inputsEditUser">
                        <label for="stock">Stock:</label>
                        <input type="number" id="stock" name="stock" value="{{$products->stock}}"><br>
                        <span class="errores">{{$errors->first('stock')}}</span> 
                    </div> <br>
                    <div class="inputsEditUser">
                        <label for="category">Category:</label>
                       <select name="category_id" id="" required>
                       <option value="">---</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name_c}}</option>
                            @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('category')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                        <label for="brand">Brand:</label>
                       <select name="brand_id" id="" required>
                            <option value="">---</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" >{{$brand->name_b}}</option>
                        @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('brand')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                         Imagen del producto: 
                        <img src="{{($products->img_p)}}" alt="Cargando Img">
                         <br> 
                         <input type="file" name="img_p" required>
                         <span class="errores">{{$errors->first('img_p')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="name_p">Nombre de la imagen:</label> 
                            <input name="nameImg" type="text" id="nameImg" value="" placeholder="Ingrese nombre con el cual quiere guardar la imagen" required  ><br>
                            <span class="errores">{{$errors->first('nameImg')}} </span>
                    </div>
                    <div class="divBoton">  
                        <button type="submit" class="botAdmUserEdit">Enviar</button>
                    </div>
                  </form>
                  </article>
            </section>
@endsection
