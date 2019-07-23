@extends('layouts.admProducts')
@section('admProduct')
<div>
    <section class="containerAdmUserShow">
        <article class="articleAdmUserShow">
            <section>
                <a href="../../admUser" class="aReturn"><- Return</a>
                <article>
                    <h3 class="h3AdmUserShow">{{$user->last_name}} - {{$user->first_name}}</h3>
                    <hr>
                    <dl class="dlAdmUserShow">
                        <dt>ID:</dt>
                        <dd><p>{{$user->id}}</p></dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Email:</dt>
                        <dd><p>{{$user->email}}</p></dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Profile:</dt>
                        <dd>{{$user->profile}}</dd>
                    </dl>
                    <dl class="dlAdmUserShow">
                        <dt>Avatar:</dt>
                        <dd class="ddShowPerfil"><img src="{{Storage::url($user->avatar)}}" alt=""></dd>
                    </dl>
                    <hr class="hrAdmUserShow">
                </article> 
            </section> 
            <section>
                <article class="article2AdmUserShow">
                <form method="GET" action="../edit/{{$user->id}}">
                    <button type="submit" id="edit" class="btnAdmUserShow">Editar</button>
                  <!--  <a href="../edit/{{$user->id}}" class="aAdmUserShow">Editar</a> -->
                </form>
                    <form method="POST" action="admUser/{{$user->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" id="eliminar" class="btnAdmUserShow">eliminar</button>
                        <!--<a href="" id="eliminar">eliminar</a> -->
                      </form>
                </article>
            </section> 
        </article>
    </section>
</div>   
@endsection