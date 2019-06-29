
@extends('layouts.home')

<!-- Navbar -->

<!-- Section -->
    @section('content')
    <div class="slideshow">
    <ul class="slider">
        <li>
            <img src="img/product-1.jpg" alt="">
            <div class="hover">
                
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
            </div>
        </li>
        <li>
            <img src="img/product-2.jpg" alt="">
            <div class="hover">
                <section class="bg-skew"></section>
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
            </div>
        </li>
        <li>
            <img src="img/product-3.jpg" alt="">
            <div class="hover">
                <section class="bg-skew"></section>
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
            </div>
        </li>
    </ul>
 </div>

 <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="__slider">
                    <div class="__product">
                      <img class="" src="img/razer2.jpg" alt="1 slide"></<img>
                      <div class="description">
                          <p class="item">item1</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer2.jpg" alt="2 slide"></<img>
                      <div class="description">
                          <p class="item"> Item2</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="3 slide"></<img>
                      <div class="description">
                          <p class="item">Item3</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="4 slide"></<img>
                      <div class="description">
                          <p class="item">Item4</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="__slider">
                    <div class="__product">
                      <img class="" src="img/razer2.jpg" alt="4 slide"></<img>
                      <div class="description">
                          <p class="item">Item5</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="5 slide"></<img>
                      <div class="description">
                          <p class="item">Item6</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>      
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="6 slide"></<img>
                      <div class="description">
                          <p class="item">Item7</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="6 slide"></<img>
                      <div class="description">
                          <p class="item">Item8</p>
                          <p>Price: <em>$449</em></p>
                          <button class="add-to-cart" type="button">Add to cart</button>
                          <img src="img/new.png" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection 




