
@extends('layouts.home')

<!-- Navbar -->

<!-- Section -->
    @section('content')
    <div class="slideshow">
    <ul class="slider">
        <li class="slider_ slider-active">
            <img src="img/product-3.jpg" alt="">
                <section class="caption">
                    <h1>Eleva tu experiencia de juego.</h1>
                    <p>Todos los accesesorios que necesitas estan aca</p>
                </section>
        </li>
        <li class="slider_ slider-hidden">
            <img src="img/product-2.jpg" alt="">
                <section class="caption">
                    <h1>Aprovecha nuestros descuentos.</h1>
                    <p>Tenemos ofertas todas las semanas</p>
               </section>
        </li>
        <li class="slider_ slider-hidden">
            <img src="img/product-1.jpg" alt="">
                <section class="caption">
                    <h1>Forma parte de Blackeyes.</h1>
                    <p>Registrate para recibir nuestras ultimas noticias</p>
                </section>
        </li>
    </ul>  
    <div class="slider-controllers">
    <ul class="controllers">
      <li><a href="#" class="control-left"><i class="fas fa-chevron-circle-left"></i></a></li>
 
      <li><a href="#" class="control-right"><i class="fas fa-chevron-circle-right"></i></a></li>
    </ul>
  </div>      
 </div>


<!-----Carousel 992----->
<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="__slider">
        @foreach($productsMouse as $productM)
         <div class="__product">
                <img class="" src="{{Storage::url($productM->img_p)}}" alt="1 slide"></<img>
                <div class="description">
                <p class="item">{{$productM->name_p}}</p>
                <p>Price: <em>${{$productM->price}}</em></p>
                <a href="infoProduct/{{$productM->id}}">Info Producto</a>
            </div>
       </div>
       @endforeach
       </div>
       </div>
       <div class="carousel-item">
            <div class="__slider">
       @foreach($productsTeclado as $productT)
       <div class="__product">      
                <img class="" src="{{Storage::url($productT->img_p)}}" alt="1 slide"></<img>
                <div class="description">
                <p class="item">{{$productT->name_p}}</p>
                <p>Price: <em>${{$productT->price}}</em></p>
               <a href="infoProduct/{{$productT->id}}">Info Producto</a>
              </div>
        </div>
             @endforeach
             </div>
             </div>
        <div class="carousel-item">
            <div class="__slider">
             @foreach($productsAuriculares as $productA)
        <div class="__product">     
                <img class="" src="{{Storage::url($productA->img_p)}}" alt="1 slide"></<img>
                <div class="description">
                <p class="item">{{$productA->name_p}}</p>
                <p>Price: <em>${{$productA->price}}</em></p>
                <a href="infoProduct/{{$productT->id}}">Info Producto</a>
              </div>
        </div>
             @endforeach
            </div>
     </div>
</div>


<!------- Productos responsive----->

<div class="__slider_responsive">
        @foreach($productsMouse as $productM)
         <div class="__product_responsive">
                <img class="" src="{{Storage::url($productM->img_p)}}" alt="1 slide"></<img>
                <div class="description_responsive">
                <p class="item">{{$productM->name_p}}</p>
                <p>Price: <em>${{$productM->price}}</em></p>
            </div>
            <a href="infoProduct/{{$productT->id}}">Info Producto</a>
       </div>
       @endforeach  
</div>


 @endsection 




