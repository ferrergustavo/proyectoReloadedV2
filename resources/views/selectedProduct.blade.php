@extends('layouts.deafultPage')
@section ('content')
<body>
    <section>
    <article class="producto">
    <a class="botonComprar" href="/shoppingCart"> COMPRAR</a>
    <h4>Pagá con MercadoPago!</h4>
    <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/online/785X40.jpg" title="MercadoPago - Medios de pago" alt="MercadoPago - Medios de pago" width="785" height="40"/>

   
    </section>
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    </body>
@endsection
@yield('partials_pau.footer') 
