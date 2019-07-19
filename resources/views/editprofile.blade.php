

@extends('layouts.editProfile'  )



@section ('content')

<div class="form_container">

<form method="POST" action="{{route('update',['id' => $user->id])}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="__container">
    <div class="edit_form">
       <div class="label_first_name">
            <label for="first_name" class="label">Nombre:</label>
            <input name="first_name" type="text" class="form_control" id="last_name" value="{{$user->first_name}}" >
       </div>
       <div class="label_last_name">
            <label for="last_name" class="label">Apellido:</label>
            <input name="last_name" type="text" class="form_control" id="last_name" value="{{$user->last_name}}" >
       </div>
    
        <div class="labelemail">
            <label for="email" class="label">Email: </label> 
            <input name="email" type="email" class="form_control" id="exampleInputEmail1" value="{{$user->email}}">
        </div>
        <small id="emailHelp" class="form-text text-muted"></small>
        <label class="cambiarcontra"><a href="">Cambiar contraseña</a></label>
        
    </div>
    <div class="avatarEdit">
        <img src="{{asset($user->avatar)}}" alt=''>  
        <label for="avatar">Cambiar avatar</label>
        <input  type="file" name="avatar" id="avatar" value="avatar"/>
    </div>   
    <div class="edit3">
        <hr>
        <button class="eliminar">Eliminar cuenta</button>
        <button type="submit" class="guardar">guardar</button>
        <button class="cancelar">Cancelar</button>
    </div>
</div>               
    </form>
</div>