

@extends('layouts.editProfile'  )



@section ('content')

<div class="form_container">

<form method="POST" action="update/{{$user->id}}" enctype="multipart/form-data">
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
            <input name="email" ty pe="email" class="form_control" id="exampleInputEmail1" value="{{$user->email}}">
        </div>
        <small id="emailHelp" class="form-text text-muted"></small>
        
    </div>
    <div class="avatarEdit">
        <img src="{{Storage::url(Auth::User()->avatar)}}" alt=''>  
        <label for="avatar">Cambiar avatar</label>
        <input  type="file" name="avatar" id="avatar" value="avatar"/>
    </div>   
    <div class="edit3">
        <hr>
        <button type="submit" class="guardar">guardar</button>
        <button class="cancelar"><a href="/">Cancelar</a></button>
    </div>
</div>               
    </form>
</div>