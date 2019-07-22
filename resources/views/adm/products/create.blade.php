@extends('layouts.admProductsNew')


@section('admProductNew')
    <section class="sectionAdmProductCreate">
            <article class="articleAdmProductCreate">
                <a href="../admProduct" class="aReturn"><- Return</a>
                <h1 class="h1AdmProductCreate">Crear Nuevo Producto:</h1>
                <div class="card-body">
                <form method="POST" action="createEnviar" enctype="multipart/form-data">
                    @csrf
                    <div class="inputsAdmProductCreate">
                            <label for="name_p">Nombre del Producto:</label>
                            <input name="name_p" type="text" id="nombre" value="" placeholder="Ingrese nombre del producto" required  > <br>
                            <span class="errores">{{$errors->first('name_p')}} </span>
                    </div> <br>
                    <div >
                            <label for="descripcion">descripcion del Producto:</label><br>
                            <textarea name="description" id="description" cols="35" rows="1
                            " placeholder="ingrese descripcion.." class="inputDescription"></textarea>
                    <!--<input name="description" type="longtext" id="description" value="" placeholder="Ingrese descripcion del producto ..." required  class="inputDescription">--> <br>
                            <span class="errores">{{$errors->first('description')}}</span>
                    </div><br>
                    <div class="inputsAdmProductCreate">
                            <label for="confirmcontra">Precio:</label>
                            <input name="price" type="number" id="price" value="" placeholder="Ingrese precio" required  > <br>
                            <span class="errores">{{$errors->first('price')}}</span>                      
                    </div> <br>
                    <div class="inputsAdmProductCreate">
                        <label for="stock">Stock:</label>
                        <input type="number" id="stock" name="stock" placeholder="ingrese el stock" required>
                    </div> <br>
                    <div class="inputsAdmProductCreate">
                        <label for="category">Category:</label>
                        <select name="category_id" id="category_id" class="selectAdmProductCreate" required>
                            <option value="">-----</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name_c}}</option>
                            @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('categoty')}}</span>
                    </div> <br>
                    <div class="inputs">
                    <label for="brand">Brand:</label>
                       <select name="brand_id" id="brand_id" class="selectAdmProductCreate" required>
                       <option value="">-----</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name_b}}</option>
                        @endforeach 
                       
                        </select>
                        <span class="errores">{{$errors->first('brand_id')}}</span>
                    </div> <br>
                    <!-- --- IMAGEN PRINCIPAL -->
                    <div class="inputsAdmProductCreate">
                       <h4>  Imagen del producto:</h4>
                          <input type="file" name="img_p" required>
                         <span class="errores">{{$errors->first('img_p')}}</span>
                    </div><br>
                    <div class="inputsAdmProductCreate">
                            <label for="name_p">Nombre de la imagen:</label> 
                            <input name="nameImg_p" type="text" id="nameImg_p" value="" placeholder="Ingrese nombre con el cual quiere guardar la imagen" required  ><br>
                            <span class="errores">{{$errors->first('nameImg')}} </span>
                    </div>
                    <!-- --- ---- -->
                     <!--  IMAGEN 2 -->
                     <div class="inputsEditUser">
                        <h4> Imagen del producto 2: </h4> 
                         <input type="file" name="img2" >
                         <span class="errores">{{$errors->first('img2')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="nameImg2">Nombre de la imagen 2:</label> 
                            <input name="nameImg2" type="text" id="nameImg2" value="" placeholder="Ingrese nombre con el cual quiere guardar la imagen" ><br>
                            <span class="errores">{{$errors->first('nameImg2')}} </span>
                    </div>
                    <!-- ---- ---- -->
                    <!--  IMAGEN 3 -->
                    <div class="inputsEditUser">
                        <h4> Imagen del producto 3: </h4>
                         <input type="file" name="img3">
                         <span class="errores">{{$errors->first('img3')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="name3">Nombre de la imagen 3:</label> 
                            <input name="nameImg3" type="text" id="nameImg3" value="" placeholder="Ingrese nombre con el cual quiere guardar la imagen" ><br>
                            <span class="errores">{{$errors->first('nameImg3')}} </span>
                    </div>
                    <!-- ---- ---- -->
                    <!--  IMAGEN 4 -->
                    <div class="inputsEditUser">
                        <h4> Imagen del producto 4: </h4>
                         <input type="file" name="img4">
                         <span class="errores">{{$errors->first('img4')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="name4">Nombre de la imagen 4:</label> 
                            <input name="nameImg4" type="text" id="nameImg4" value="" placeholder="Ingrese nombre con el cual quiere guardar la imagen" ><br>
                            <span class="errores">{{$errors->first('nameImg4')}} </span>
                    </div>
                    <!-- ---- ---- -->
                    <div class="botonAdmProductCreate">            
                        <button class="btnAdmProductCreate">Crear</button>
                    </div>
                  </form>
                  </article>
            </section>
@endsection
