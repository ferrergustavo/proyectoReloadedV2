

@extends('layouts.editProfile'  )



@section ('content')

<div class="form_container">

<form method="POST" action="{{route('update',['id' => $user->id])}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="edit_form">
    <label for="first_name" class="label">Nombre de perfil:</label>
    <input name="first_name" type="text" class="form_control" id="first_name" value="{{$user->first_name}}" >
    <div class="labelemail">
        <label for="email" class="label">Email: </label> 
        <input name="email" type="email" class="form_control" id="exampleInputEmail1" value="{{$user->email}}">
    </div>
    <small id="emailHelp" class="form-text text-muted"></small>
    <label class="cambiarcontra"><a href="">Cambiar contraseña</a></label>
    
</div>
<div class="avatarEdit">
  <img src="{{asset($user->avatar)}}" alt=''>  
    <label for="avatar">Cambiar avatar<input  type="file" name="avatar" value=""/></label>
</div>                  
<div class="edit3">
    <hr>
    <button class="eliminar">Eliminar cuenta</button>
    <input type="submit" class="guardar" value="Guardar">
    <button class="cancelar">Cancelar</button>
</div>
    </form>
</div>