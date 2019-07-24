 //-------Busqueda-----//
 let containerBusqueda = document.querySelector('.search_display');
 let botonSearch = document.querySelector('.search_Icon');
 let cerrarBusqueda = document.querySelector('#imgXP');
 let busquedaResponsive = document.querySelector('.__search')
 let botonSearchResponsive = document.querySelector('.botonNavbar_');
 let cerrarBusquedaResponsive = document.querySelector('#imgXL');


 botonSearch.addEventListener('click',abrirSearch);
 cerrarBusqueda.addEventListener('click',cerrarSearch);
 botonSearch.addEventListener('click',abrirSearchLog);
 botonSearchResponsive.addEventListener('click',abrirSearchRes); 
 botonSearchResponsive.addEventListener('click',abrirSearchResLog);
 cerrarBusquedaResponsive.addEventListener('click',cerrarSearchRes);
 botonSearchResponsive.addEventListener('click',abrirSearchResLog2);




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

 function abrirSearchRes(){
     busquedaResponsive.style.display="block";
     mySidebar.style.display='none';
 }
 
 function cerrarSearchRes(){
     busquedaResponsive.style.display="none";
 }

 function abrirSearchResLog2(){
    console.log(busquedaResponsive);
    busquedaResponsive.style.display="block";
    mySidebar.style.display='none';
}

 function abrirSearchResLog(){
     console.log(busquedaResponsive);
     busquedaResponsive.style.display="block";
     mySidebar.style.display='none';
     containerProfile.style.display='none';
 }


 