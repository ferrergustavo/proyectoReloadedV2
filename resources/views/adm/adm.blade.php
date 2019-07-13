@extends('layouts.admL')

@section('Adm')
    
    <div class="containerAdm">
        <section class="sAd">
            <article class="aAd">
                <h1>ADMINISTRAR</h1>
                <br>
                <form action="" method="POST">
                <a href="admUser" class="btn">ADMINISTRAR USUARIOS</a>
                <br>
                <a href="admProduct" class="btn">ADMINISTRAR PRODUCTOS</a>
                </form>
            </article>
        </section>
    </div>
@endsection