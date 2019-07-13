@extends('layouts.admUsers')

@section('admUser')
<section class="sectionAdmUser">
                <h1 class="h1AdmUser">ADMINISTRAR USERS</h1>
                <hr class="hrAdmUser">
                {{$users->links()}}
         <div class="containerAdmUser">
        <table class="table">
          <thead>
            <tr class="trAdmUser">
              <th >#</th>
              <th >Users</th>
              <th >Modificar</th>
              <th >Borrar</th>
              <th >Info</th>
            </tr>
          </thead>
          <tbody>
              @foreach($users as $user)
                <tr>
                  <th scope="row">{{$user->user_id}}</th>
                  <td class="tdAdmUser">ID={{$user->id}}         Nombre= {{$user->first_name}}       -       Apellido=   {{$user->last_name}}       -       Email=   {{$user->email}}       -       Profile= {{$user->profile}}</td>
                  <td class="tdAdmUser">
                        <a href="admUser/edit/{{$user->id}}" id="modif">modificar</a> 
                  </td>
                  <td class="tdAdmUser">
                      <form method="POST" action="admUser/{{$user->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" id="eliminar">eliminar</button>
                        <!--<a href="" id="eliminar">eliminar</a> -->
                      </form>
                  </td>
                  <td class="tdAdmUser">
                        <a href="" id="+info">+info</a>
                  </td>
                </tr>
                  @endforeach
                  
              </tbody>    
              
          </div>
    </div>    
    
</section>
@endsection
