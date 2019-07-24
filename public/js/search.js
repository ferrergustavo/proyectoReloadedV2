 //-------Busqueda-----//
 let containerBusqueda = document.querySelector('.search_display');
 let botonSearch = document.querySelector('.search_Icon');
 let cerrarBusqueda = document.querySelector('#imgXP');


 botonSearch.addEventListener('click',abrirSearch);
 cerrarBusqueda.addEventListener('click',cerrarSearch);
 botonSearch.addEventListener('click',abrirSearchLog);

 function abrirSearch(){
     containerBusqueda.style.display="block";
     bodyLogin.style.display='none'; 
     bodyRegistro.style.display='none';
     mySidebar.style.display = 'none';
 }

 function cerrarSearch(){
     containerBusqueda.style.display="none";
     container.style.opacity = "1";
 }

 function abrirSearchLog(){
     containerBusqueda.style.display="block";
     mySidebar.style.display='none';
     containerProfile.style.display="none";
 }


 