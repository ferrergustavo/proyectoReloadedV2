@extends('layouts.admProducts')

@section('admProduct')
    <section class="sectionAdmProductCreate">
        <article>
            <a href="../admProduct" class="aReturn"><- Return</a>
            <h1 class="h1AdmProductCreate">New Brand:</h1>
            <hr>
            <form action="newBrandEnviar" method="POST">
                @csrf
                <div class="inputsAdmProductCreate">
                <label for="name_b">Nombre de la Marca:</label>
                <input type="text" name="name_b" id="name_b" placeholder="ingrese nombre de la marca" require>
                </div>
                <br>
                <button class="btnAdmProductCreate">Enviar</button>
            </form>
        </article>
    </section>
@endsection