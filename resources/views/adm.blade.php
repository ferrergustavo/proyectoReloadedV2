@extends('layouts.admL')

@section('Adm')
    <div class="containerAdm">
        <section class="sAd">
            <article class="aAd">
                <h1>ADMINISTRAR</h1>
                <br>
                <form action="" method="POST">
                    <button type="submit" name="user" class="btn">ADMINISTRAR USUARIOS</button>
                    <br>
                    <button type="submit" name="products" class="btn">ADMINISTRAR PRODUCTOS</button>
                </form>
            </article>
        </section>
    </div>
@endsection