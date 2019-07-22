@extends('layouts.app')

@section('content')
<section class="section1">
            <article class="article1">
            <h1>Log In</h1> <hr>
            <form method="POST" action="">
              @csrf
                    <div class="inputs">
                      <label for="email">Email:</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Ingrese email..." required > <br>
                      <span class="errores">{{$errors->first('email')}} </span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="inputs">
                      <label for="contra">Contraseña:</label> <!--NAME="password"--> <br>
                      <input name="password" type="password" id="exampleInputPassword1" placeholder="Contraseña"required > <br>
                      <span class="errores">{{$errors->first('password')}} </span> 
                      <small class="smalls"><p> La contraseña debe tener al menos 8 caracteres.</p></small> <br>
                      <small id="olvidecontraseña" class="olvidepass"><a href="password/reset">Olvidaste tu contraseña?</a> </small>
                    </div> <br>
                    <div class="recordar"> 
                      <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Recordame!</label>
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <hr class="opt1">
                    <label class="cuenta" ><a href="register">Sos nuevo en la pagina?</a></label>
                    <hr class="opt">
                  </form>
            </article>
        </section>

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
</div>-->
@endsection
