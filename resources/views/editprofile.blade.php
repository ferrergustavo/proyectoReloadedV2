

@extends('layouts.editProfile'  )



@section ('content')

<div class="form_container">

<form method="POST" action="" enctype="multipart/form-data">
<div class="edit_form">
    <label for="nombre" class="label">Nombre de perfil:</label>
    <input name="nombre" type="text" class="form_control" id="nombre" value="" >
    <div class="labelemail">
        <label for="email" class="label">Email:</label> 
        <input name="email" type="email" class="form_control" id="exampleInputEmail1" value="">
    </div>
    <small id="emailHelp" class="form-text text-muted"></small>
    <label class="cambiarcontra"><a href="">Cambiar contraseña</a></label>
    
</div>
<div class="avatarEdit">
  <img src="" alt=''>  
    <label for="avatar">Cambiar avatar<input  type="file" name="avatar" value=""/></label>
</div>                  
<div class="edit3">
    <hr>
    <button class="eliminar">Eliminar cuenta</button>
    <button type="submit" class="guardar">Guardar</button>
    <button class="cancelar">Cancelar</button>
</div>
    </form>
</div>