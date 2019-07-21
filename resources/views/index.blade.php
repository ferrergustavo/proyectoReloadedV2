
@extends('layouts.home')

<!-- Navbar -->

<!-- Section -->
    @section('content')
    <div class="slideshow">
    <ul class="slider">
        <li class="slider_ slider-active">
            <img src="img/product-1.jpg" alt="">
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
        </li>
        <li class="slider_ slider-hidden">
            <img src="img/product-2.jpg" alt="">
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet adipisicing elit. Sapiente, beatae?</p>
               </section>
        </li>
        <li class="slider_ slider-hidden">
            <img src="img/product-3.jpg" alt="">
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.?</p>
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

 


 @endsection 




