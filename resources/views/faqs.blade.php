@extends('layouts.defaultPage')
@section ('content')
    <div class="containerFaqs">
        <section class="sectionFaqs">
            <h1 class="h1Faqs">FAQs</h1> 
            <article class="articleFaqs">
                <h3 class="h3Faqs">¿Cuáles son las formas de pago? 
                <button data-toggle="collapse" data-target="#pcollapse" class="boton_Faqs" >+</button></h3>
                   <div class="collapse" id="pcollapse"> 
                        <p>Las formas de pago son: efectivo, transferencia, depósito bancario o PayPal.</p>
                    </div>
                <hr class="hrFaqs">
            </article>
            <article class="articleFaqs">
                <h3 class="h3Faqs">¿Puedo pagar en cuotas sin interés?  <button data-toggle="collapse" data-target="#p2collapse" class="boton_Faqs" >+</button></h3>
                    <div class="collapse" id="p2collapse">
                        <p>Mercado Pago: dependiendo la tarjeta que tengas te ofrece cuotas sin interés. El link para saber cuáles son las tarjetas con promociones es:     <a href="https://www.mercadopago.com.ar/promociones">promociones mercadopago.</a></p>
                    </div>
                <hr class="hrFaqs">
            </article>
            <article class="articleFaqs" >
                <h3 class="h3Faqs">¿Los precios publicados en la web en que moneda están?  <button data-toggle="collapse" data-target="#p3collapse" class="boton_Faqs" >+</button></h3>
                    <div class="collapse" id="p3collapse">    
                        <p>Los precios de la web están expresados en pesos argentinos, salvo, aquellos que su marcador indiquen que están en USD.</p>
                    </div>
                <hr class="hrFaqs">
            </article>
            <article class="articleFaqs">
                <h3 class="h3Faqs" >¿Son precios Finales o más IVA?  <button data-toggle="collapse" data-target="#p4collapse" class="boton_Faqs" >+</button></h3>
                    <div class="collapse" id="p4collapse">
                        <p>Todos los precios son finales IVA incluido.</p>
                    </div>
                <hr class="hrFaqs">
            </article>
            <article class="articleFaqs">
                <h3 class="h3Faqs">¿Hacen envíos internacionales?  <button data-toggle="collapse" data-target="#p5collapse" class="boton_Faqs" >+</button></h3> 
                    <div class="collapse" id="p5collapse">    
                        <p>No, por el momento solo envios nacionales.</p>
                    </div>
                <hr class="hrFaqs">
            </article>
            <article class="articleFaqs">
                <h3 class="h3Faqs">¿Entregan factura y garantía?  <button data-toggle="collapse" data-target="#p6collapse" class="boton_Faqs" >+</button></h3>
                    <div class="collapse" id="p6collapse">
                        <p>En absolutamente todas las ventas que realizamos se entrega factura fiscal en donde especifica el tiempo de la garantía.</p>
                    </div>       
                <hr class="hrFaqs">             
            </article>
        </section>
    </div>

@endsection

