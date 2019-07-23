
<nav>
<div class="container_navBar">
        <div Class ="botonLineas">
        <div class ="lineIcon"></div>
        <div class ="lineIcon"></div>
        <div class ="lineIcon"></div>
        </div>
        <a class="botonNavBar" href="search.php" ><img class="botonNavBar"src="img/search.svg" alt="Search"></a>
        <div class="logo"><a href="/"><img src="storage/logocolor.svg" alt=""></a></div>
        <a class="botonNavBar" href="carrito.php" ><img class="botonNavBar"src="img/carrito.svg" alt="Shopping_Cart"></a>
        @guest
        <a class="botonNavBar" href="login" ><img class="botonNavBar"src="img/profile.png" alt="Profile_icon"></a>
        @else
          <div  class="Perfil__">
              <img id="imgUserCel" src='{{Storage::url(Auth::user()->avatar)}}' alt="">
            </div>
        @endguest
        </div>
<div class="container_NavBarVertical">
        <div class="logo_Vertical"><a href="index.php"><img src="storage/logocolor.svg" alt=""></a></div>
        <div class="container_verticalIcons">
            <div class="shop_Icon">
            <button  class="nav_Icons"><img src="img/shop_icon.svg" alt="shop_icon"> </button>
            <p class="titulos_iconos">PRODUCTOS</p>
            </div> 
            <div class="cart_Icon">
            <a  class="nav_Icons" href="shoppingCart"><img src="img/carrito.svg" alt="cart_icon"> </a>
            <p class="titulos_iconos">CARRITO</p>
            </div>
            <div class="search_Icon">
            <a  class="nav_Icons" href="#"><img src="img/search.svg" alt="search_icon"> </a>
            <p class="titulos_iconos">BUSCAR</p>
            </div>
            @guest
            <div class="profile_Icon">
            <a id="profile" class="nav_Icons" href="#"><img src="img/profile2.svg" alt="profile_icon"> </a>
            <p class="titulos_iconos">PERFIL</p>
            </div>
            @else
            <div class="profile_logueado">
            <img src='{{Storage::url(Auth::user()->avatar)}}' alt="">
            </div>
            @if (Auth::User()->profile==9797)
              <div class='admin_Icon'>
                <a  class='nav_Icons' href='adm'><img src='img/admin.svg' alt='admin_icon'> </a>
                <p class="titulos_iconos"> ADMIN</p>
              </div>
            @endif
            @endguest
        <div class="help_Icon">
            <a  class="nav_Icons" href="faqs"><img src="img/help.svg" alt="help_icon"> </a>
            <p class="titulos_iconos"> FAQs</p>
        </div>
        </div>
</div>
</nav>

<!------Shop Display ----->
<div class="shop_display">
<span id="imgXY" class="imgX"><img src='img/X.svg' alt=""></span> 
<ul class="categories">
    <li class="teclado__">
    <img src="img/teclado-navbar.jpg" alt="">
    <a>Teclados</a>
    </li>
    <li class=" auriculares__">
    <img src="img/auricular-navbar.jpg" alt="">
    <a>Auriculares</a>
    </li>
    <li class="mouse__">
    <img src="img/mouse-navbar.jpg" alt="">
    <a>Mouse</a>
    </li>

</ul>    
</div>

<!-- -----REGISTRO------>
<div id="registroMenu" class="registroMenu">
    <div id="registroMenuContent" class="registroMenuContent">
        <div id="headRegister" class="headRegister">
           <span id="imgX" class="imgX"><img src='img/X.svg' alt=""></span>  
          <h2 id="h2Registro" class="h2Registro">Registro</h2>
            
        </div>
        <div id="bodyRegister" class="bodyRegister">
        <form id="form_Register" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="inputs">
                            <label for="nombre">Nombre:</label> <br>
                            <input name="first_name" type="text" id="first_name" value=" {{old('fist_name')}} " placeholder="Ingrese su nombre ..." required  > <br>
                            <span id="errorFirst_name"></span>
                            <span class="errores">{{$errors->first('first_name')}} </span>
                    </div>
                    <div class="inputs">
                            <label for="nombre">Apellido:</label> <br>
                            <input name="last_name" type="text" id="last_name" value=" {{old('last_name')}} " placeholder="Ingrese su apellido ..." required  > <br>
                            <span id="errorLast_name"></span>
                            <span class="errores">{{$errors->first('last_name')}}</span>
                    </div>
                    <div class="inputs">
                      <label for="email">Email:</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="email" aria-describedby="emailHelp" value=" {{old('email')}} " placeholder="Ingrese email ..."required > <br>
                      <span id="errorEmail"></span>
                      <span class="errores">{{$errors->first('email')}}</span>       
                    </div>
                    <div class="inputs">
                      <label for="contra">Contraseña:</label> <!--NAME="password"--> <br>
                      <input name="password" type="password" id="password" placeholder="Contraseña" required >  <br>
                      <span id="errorPassword"></span>
                      <span class="errores">{{$errors->first('password')}}</span>
                      <small id="olvidecontraseña" class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Confirmar contraseña:</label> <br> <!--NAME="password_confirmation"-->
                            <input name="password_confirmation" type="password" id="password_confirmation" placeholder=" Confirme la contraseña"required > <br>
                            <span id="errorConfirmPassRegistro"></span>
                            <span class="errores"></span>                        
                    </div>
                    <button type="submit" class="EnviarForm">Enviar</button>
                    <label class="cuenta" ><a id="tenesCuenta" href="#">Ya tenes cuenta?</a></label>
                    <hr class="opt">
                  </form>
        </div>
    </div>
</div>
<!-- ----- LOGIN ----- -->
<div id="loginMenu" class="registroMenu">
    <div id="loginMenuContent" class="registroMenuContent">
        <div id="headRegister" class="headRegister">
           <span id="imgXL" class="imgX"><img src='img/X.svg' alt=""></span>  
          <h2 id="h2Registro" class="h2Registro">Login</h2>
            
        </div>
        <div id="bodyRegister" class="bodyRegister">
        <form method="POST" action="{{route('login')}}">
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
                      <small class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small> <br>
                      <small id="olvidecontraseña" class="olvidepass"><a href="password/reset">Olvidaste tu contraseña?</a> </small>
                    </div> <br>
                    <div class="recordar"> 
                      <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Recordame!</label>
                    </div>
                    <button type="submit" class="EnviarForm">Enviar</button> <br>
                    <hr class="opt1">
                    <label class="cuenta" ><a id="sosNuevo" href="#">Sos nuevo en la pagina?</a></label>
                  </form>
        </div>
  </div>
</div>


<!----Busqueda------>
<div class="search_display">
<span id="imgXP" class="imgX"><img src='img/X.svg' alt=""></span>
<form action="/search" method="get">
<div clas>
  <input type="search" placeholder="Hermano querido aca puedes realizar tu busqueda" name="busqueda">
  <button type="submit" class="seach_button"><i class="fas fa-search"></i></button>
</div>
</form> 
<div class="search_container">
<ul>
<li class="search_brands"><a href=""><img src="img/auricular-navbar.jpg" alt=""><p>Razer</p></a></li>
<li class="search_brands"><a href=""><img src="img/auricular-navbar.jpg" alt=""><p>Razer</p></a></li>
<li class="search_brands"><a href=""><img src="img/auricular-navbar.jpg" alt=""><p>Razer</p></a></li>
<li class="search_brands"><a href=""><img src="img/auricular-navbar.jpg" alt=""><p class="search_a">Razer</p></a></li>
<li class="search_brands"><a href=""><img src="img/auricular-navbar.jpg" alt=""><p class="search_a">Razer</p></a></li>
<li class="search_brands"><a href=""><img src="img/auricular-navbar.jpg" alt=""><p class="search_a">Razer</p></a></li>
</ul>
</div>

</div>



