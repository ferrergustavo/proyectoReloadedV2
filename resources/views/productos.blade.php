@extends('layouts.products')
@section ('content')
<body>
    <section>
    <article class="botonesFiltros"></article>
    <article class="productos">
    <button class="filtro"><img src='{{asset('img/filter_icon.svg')}}' alt="filter_icon"></button>
    </article>
    <a href="/productInfo">
         <img src=img/razer3.jpg alt="razer3"> 
         <h3> PRECIO DE PRODUCTO</h3>
         <h5> Nombre de producto</h5>
        </a>
    </article>
    </section>
    <script src='{{asset('js/filtros.js')}}'></script>
    </body>
@endsection
@yield('footer') 

