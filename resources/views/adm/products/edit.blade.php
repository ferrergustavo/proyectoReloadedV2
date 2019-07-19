@section('admProductUpdate')
    <section class="section1">
            <article class="article1">
                 <a href="../admProduct" class="aReturn"><- Return</a>
                <h1 class="admProductEdit">Editar Producto</h1>
                <div class="card-body">
                <form method="POST" action="{{route('products.store')}}">
                    @csrf
                    <div class="inputs">
                            <label for="name_p">Nombre del Producto:</label> <br>
                            <input name="name_p" type="text" id="nombre" value=" {{$product->name_p}}"> <br>
                            <span class="errores">{{$errors->first('name_p')}} </span>
                    </div>
                    <div class="inputs">
                            <label for="descripcion">descripcion del Producto:</label> <br>
                            <input name="description" type="textarea" id="description" value=" {{$product->description}} > <br>
                            <span class="errores">{{$errors->first('description')}}</span>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Precio:</label> <br> 
                            <input name="price" type="number" id="price" value=" {{$product->price}}"> <br>
                            <span class="errores">{{$errors->first('price')}}</span>                      
                    </div>
                    <div class="inputs">
                        <label for="stock">Stock:</label>
                        <input type="number" id="stock" name="stock" value="{{$product->stock}}"><br>
                        <span class="errores">{{$errors->first('stock')}}</span> 
                    </div>
                 <!--   <div class="inputs">
                         Imagen del producto: <input type="file" name="img_p" required>
                         <span class="errores">{{$errors->first('img_p')}}</span>
                    </div> -->
                    <div class="inputs">
                       <select name="category" id="" required>
                            @foreach(categorys as category)
                                <option value="{{$category->category_id}}">{{$category->'name_c'}}</option>
                            @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('category')}}</span>
                    </div>
                    <div class="inputs">
                       <select name="brand" id="" required>
                        @foreach(brands as brand)
                            <option value="{{$brand->brand_id}}" >{{$brand->'name_b'}}</option>
                        @endforeach 
                        </select>
                        <span class="errores">{{$errors->first('brand')}}</span>
                    </div>
                    
                    <hr class="opt">
                  </form>
                  </article>
            </section>
@endsection
