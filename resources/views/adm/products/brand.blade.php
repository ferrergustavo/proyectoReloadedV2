@extends('layouts.admProducts')

@section('admProduct')
    <section class="sectionAdmProductCreate">
        <article>
            <a href="../admProduct" class="aReturn"><- Return</a>
            <h1 class="h1AdmProductCreate">New Brand:</h1>
            <hr>
            <form action="newBrandEnviar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="inputsAdmProductCreate">
                <label for="name_b">Nombre de la Marca:</label>
                <input type="text" name="name_b" id="name_b" placeholder="ingrese nombre de la marca" require>
                </div>
                <br>
                <div class="inputsAdmProductCreate">
                        <h4> Logo de la marca: </h4> 
                         <input type="file" name="img_b">
                         <span class="errores">{{$errors->first('img_b')}}</span>
                    </div><br>
                    <div class="inputsAdmProductCreate">
                            <label for="name4">Nombre de la imagen:</label> 
                            <input name="nameImg_b" type="text" id="nameImg_b" value="" placeholder="Ingrese nombre con el cual quiere guardar la imagen" ><br>
                            <span class="errores">{{$errors->first('nameImg_b')}} </span>
                    </div><br>
                <button class="btnAdmProductCreate">Enviar</button>
            </form>
        </article>
    </section>
@endsection