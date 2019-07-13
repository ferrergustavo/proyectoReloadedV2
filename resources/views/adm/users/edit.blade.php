@extends('layouts.admUsers')
@section('admUserEdit')
    <section class="sectionAdmUserEdit">
            <article class="article1">
                    <h1 class="h1EditUser">El usuario <strong class="UserName">{{$user->last_name}},{{$user->first_name}}</strong> esta siendo modificado</h1> 
                    <hr class="hrAdmUserEdit">
                <div class="card-body">
                <form method="POST" action="{{route('editUser',['id'=> $user->id])}}" >
                    @csrf
                    @method('PUT')
                    <div class="inputsEditUser">
                        <p>ID: {{$user->id}}</p>
                    </div>
                    <div class="inputsEditUser">
                            <label for="first_name">Nombre:</label>
                            <input name="first_name" type="text" id="nombre" value="{{$user->first_name}} "> <br>
                            <span class="errores">{{$errors->first('first_name')}} </span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="last_name">Apellido:</label>
                            <input name="last_name" type="text" id="last_name" value=" {{$user->last_name}} "> <br>
                            <span class="errores">{{$errors->first('last_name')}}</span>
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="email">Email:</label>
                            <input name="email" type="email" id="email" value=" {{$user->email}} "> <br>
                            <span class="errores">{{$errors->first('email')}}</span>                      
                    </div><br>
                    <div class="inputsEditUser">
                            <label for="profile">Profile:</label>
                            <input name="profile" type="number" id="profile" value="{{$user->profile}}">
                            <span class="errores">{{$errors->first('profile')}}</span>       
                    </div>    <br>
                        <div class="divBoton">  
                        <button type="submit" class="botAdmUserEdit">Enviar</button>
                        </div>
                    </div>
                    
                    <hr class="opt">
                  </form>
                  </article>
            </section>
@endsection
