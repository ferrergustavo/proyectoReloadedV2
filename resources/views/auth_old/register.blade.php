    <div>
        <div class="logo">
              <a href="index.php">
                <img src="img/logo.svg" alt="">
              </a>  
            </div>
        <section class="section1">
            <article class="article1">
            <h1>Crear Cuenta</h1> <hr>
            <form method="POST" action="{{ route('register') }}">
              @csrf
                    <div class="inputs">
                            <label for="nombre">Nombre:</label> <br>
                            <input name="first_name" type="text" id="nombre" value="" placeholder="Ingrese su nombre ..." required  > <br>
                            <span class="errores">{{$errors->first('first_name')}} </span>
                    </div>
                    <div class="inputs">
                            <label for="nombre">Apellido:</label> <br>
                            <input name="last_name" type="text" id="apellido" value="" placeholder="Ingrese su apellido ..." required  > <br>
                            <span class="errores">{{$errors->first('last_name')}}</span>
                    </div>
                    <div class="inputs">
                      <label for="email">Email:</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Ingrese email ..."required > <br>
                      <span class="errores">{{$errors->first('email')}}</span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="inputs">
                      <label for="contra">Contraseña:</label> <!--NAME="password"--> <br>
                      <input name="password" type="password" id="exampleInputPassword1" placeholder="Contraseña" required >  <br>
                      <span class="errores">{{$errors->password}}</span>
                      <small id="olvidecontraseña" class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Confirmar contraseña:</label> <br> <!--NAME="password_confirmation"-->
                            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder=" Confirme la contraseña"required > <br>
                            <span class="errores"></span>                        
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <label class="cuenta" ><a href="login.php">Ya tenes cuenta?</a></label>
                    <hr class="opt">
                  </form>
            </article>
        </section>
    </div>