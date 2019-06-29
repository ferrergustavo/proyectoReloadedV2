@extends('addProducts')


@section('addProduct')
<section class="section1">
            <article class="article1">
                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="inputs">
                            <label for="name_p">Nombre del Producto:</label> <br>
                            <input name="name_p" type="text" id="nombre" value=" {{old('')}} " placeholder="Ingrese nombre del producto" required  > <br>
                            <span class="errores">{{$errors->first('')}} </span>
                    </div>
                    <div class="inputs">
                            <label for="descripcion">descripcion del Producto:</label> <br>
                            <input name="description" type="textarea" id="description" value=" {{old('')}} " placeholder="Ingrese descripcion del producto ..." required  > <br>
                            <span class="errores">{{$errors->first('')}}</span>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Precio:</label> <br> 
                            <input name="price" type="number" id="price" value=" {{old('')}} " placeholder="Ingrese precio" required  > <br>
                            <span class="errores">{{$errors->first('')}}</span>                      
                    </div>
                    <div class="inputs">
                        <input type="checkbox" name="stock"required>
                    </div>
                    <div class="inputs">
                         Imagen del producto: <input type="file" name="img_p" required>
                         <span class="errores">{{$errors->first('')}}</span>
                    </div>
                    <div class="inputs">
                       <select name="category" id="" required>
                       <!-- @foreach

                        @endforeach -->
                        </select>
                        <span class="errores">{{$errors->first('')}}</span>
                    </div>
                    <div class="inputs">
                       <select name="brand" id="" required>
                        <!--@foreach

                        @endforeach-->
                        </select>
                        <span class="errores">{{$errors->first('')}}</span>
                    </div>
                    <hr class="opt">
                  </form>
                  </article>
                  </section>
@endsection
