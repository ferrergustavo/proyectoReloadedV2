@extends('layout.admProductsNew')


@section('admProductNew')
    <section class="section1">
            <article class="article1">
                <div class="card-body">
                <form method="POST" action="{{route('products.store')}}">
                    @csrf
                    <div class="inputs">
                            <label for="name_p">Nombre del Producto:</label> <br>
                            <input name="name_p" type="text" id="nombre" value=" {{old('')}} " placeholder="Ingrese nombre del producto" required  > <br>
                            <span class="errores">{{$errors->first('name_p')}} </span>
                    </div>
                    <div class="inputs">
                            <label for="descripcion">descripcion del Producto:</label> <br>
                            <input name="description" type="textarea" id="description" value=" {{old('')}} " placeholder="Ingrese descripcion del producto ..." required  > <br>
                            <span class="errores">{{$errors->first('description')}}</span>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Precio:</label> <br> 
                            <input name="price" type="number" id="price" value=" {{old('')}} " placeholder="Ingrese precio" required  > <br>
                            <span class="errores">{{$errors->first('price')}}</span>                      
                    </div>
                    <div class="inputs">
                        <input type="checkbox" name="stock"required>
                    </div>
                    <div class="inputs">
                         Imagen del producto: <input type="file" name="img_p" required>
                         <span class="errores">{{$errors->first('img_p')}}</span>
                    </div>
                    <div class="inputs">
                       <select name="category" id="" required>
                            @foreach(categories as category)
                                <option value="{{$category->category_id}}">{{$errors->first('category_id')}}</option>
                            @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('categoty')}}</span>
                    </div>
                    <div class="inputs">
                       <select name="brand" id="" required>
                        @foreach(brands as brand)
                            <option value="{{$brand->brand_id}}">{{$brand->'name_b'}}</option>
                        @endforeach 
                        
                        </select>
                        <span class="errores">{{$errors->first('brand_id')}}</span>
                    </div>
                    
                    <hr class="opt">
                  </form>
                  </article>
            </section>
@endsection