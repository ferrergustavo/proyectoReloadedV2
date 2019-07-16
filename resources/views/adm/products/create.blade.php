@extends('layouts.admProductsNew')


@section('admProductNew')
    <section class="sectionAdmProductCreate">
            <article class="articleAdmProductCreate">
                <a href="../admProduct" class="aReturn"><- Return</a>
                <h1 class="h1AdmProductCreate">Crear Nuevo Producto:</h1>
                <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="inputsAdmProductCreate">
                            <label for="name_p">Nombre del Producto:</label>
                            <input name="name_p" type="text" id="nombre" value="" placeholder="Ingrese nombre del producto" required  > <br>
                            <span class="errores">{{$errors->first('name_p')}} </span>
                    </div> <br>
                    <div >
                            <label for="descripcion">descripcion del Producto:</label><br>
                            <input name="description" type="textarea" id="description" value="" placeholder="Ingrese descripcion del producto ..." required  class="inputDescription" > <br>
                            <span class="errores">{{$errors->first('description')}}</span>
                    </div><br>
                    <div class="inputsAdmProductCreate">
                            <label for="confirmcontra">Precio:</label>
                            <input name="price" type="number" id="price" value="" placeholder="Ingrese precio" required  > <br>
                            <span class="errores">{{$errors->first('price')}}</span>                      
                    </div> <br>
                    <div class="inputsAdmProductCreate">
                        <label for="srock">Stock:</label>
                        <input type="number" id="stock" name="stock" placeholder="ingrese el stock" required>
                    </div> <br>
                    <div class="inputsAdmProductCreate">
                        <label for="category">Category:</label>
                        <select name="category" id="" class="selectAdmProductCreate" required>
                            @foreach($categories as $category)
                                <option value="{{$category->category_id}}">{{$category->name_c}}</option>
                            @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('categoty')}}</span>
                    </div> <br>
                    <div class="inputs">
                    <label for="brand">Brand:</label>
                       <select name="brand" id="" class="selectAdmProductCreate" required>
                        @foreach($brands as $brand)
                            <option value="{{$brand->brand_id}}">{{$brand->name_b}}</option>
                        @endforeach 
                        
                        </select>
                        <span class="errores">{{$errors->first('brand_id')}}</span>
                    </div> <br>
                    <div class="inputsAdmProductCreate">
                         Imagen del producto: <input type="file" name="img_p" required>
                         <span class="errores">{{$errors->first('img_p')}}</span>
                    </div>
                    <div class="botonAdmProductCreate">            
                        <button class="btnAdmProductCreate">Crear</button>
                    </div>
                  </form>
                  </article>
            </section>
@endsection
