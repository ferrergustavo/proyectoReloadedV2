@extends('layouts.admUsers')

@section('admUser')
<section class="sectionAdmUser">
                <a href="adm" class="aReturn"><- Return</a>
                <h1 class="h1AdmUser">ADMINISTRAR USERS</h1>
                <hr class="hrAdmUser">
                {{$users->links()}}
         <div class="containerAdmUser">
        <table class="table">
          <thead>
            <tr class="trAdmUser">
              <th >#</th>
              <th >Users</th>
              <th>Profile</th>
              <th >Modificar</th>
              <th >Borrar</th>
              <th >Info</th>
            </tr>
          </thead>
          <tbody>
              @foreach($users as $user)
                <tr>
                  <th scope="row">{{$user->user_id}}</th>
                  <td class="tdAdmUser">ID={{$user->id}}         Nombre= {{$user->first_name}}       -       Apellido=   {{$user->last_name}}       -       Email=   {{$user->email}}</td>
                  <td class="tdAdmUser">{{$user->profile}}</td>
                  <td class="tdAdmUser">
                        <a href="admUser/edit/{{$user->id}}" id="modif">modificar</a> 
                  </td>
                  <td class="tdAdmUser">
                  <form method="POST" action="admUser/{{$user->id}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" id="siElim" class="eliminarAdmUser">eliminar</button>
                    </form>
                    <!--    <a href="#" id="eliminar">eliminar</a> -->
                  </td>
                  <td class="tdAdmUser">
                        <a href="admUser/show/{{$user->id}}" id="+info">+info</a>
                  </td>
                </tr>
                <!-- MODAL -->
        <!--        <div id="modalModif" class="modalUser">
                            <div id="flex" class="flex">
                              <div class="contenidoModal">
                                <div class="modal-head flex">
                                    <h3 class="modalH3Modif">Modificar {{$user->first_name}}</h3>
                                    <span id="close" class="close">X</span>
                                </div>
                                  <div class="modal-body">
                                    <h4>Seguro que quiere modificar este usuario?</h4>
                                    <a href="admUser/edit/{{$user->id}}" id="siModif" class="botonModal">Si</a>
                                    <a href="admUser" id="noModif" class="botonModal">No</a>
                                  </div>
                              </div>
                            </div>
                </div>-->
                  @endforeach
                  
              </tbody>    
          </div>
          
    </div>        
</section>

<!-- <div id="modalEliminar" class="modalUser">
            <div id="flex" class="flex">
              <div class="contenidoModal">
                <div class="modal-head flex">
                    <h3 class="modalH3Modif">Eliminar</h3>
                    <span id="close2" class="close">X</span>
                </div>
                  <div class="modal-body">
                    <h4>Seguro que quiere eliminar este usuario?</h4>
                    <form method="POST" action="admUser/{{$user->id}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" id="siElim" class="botonModalElim">Si</button>
                      <a href="admUser" id="noElim" class="botonModal">No</a>
                    </form>
                  </div>
              </div>
            </div>
</div> -->
@endsection
