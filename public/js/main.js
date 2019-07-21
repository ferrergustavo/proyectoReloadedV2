//---- Al iniciar la pagina----//

$('.slider li').hide();//Con esto ocultamos todos los slides
$('.slider li:first').show();// Hacemos que el primer slide se muestre

//-----Funciones a ejecutar----//
$('.pagination li ').click(pagination);//Esto significa que al hacer click a cualquier elemento del li dentro de la paginacion hara la funcion pagination



//----Funciones----//

function pagination(){
    var paginationPos = $(this).index() + 1;//Esto devulve el valor de la posicion dentro del elemento
    $('.slider li').hide();
    $('.slider li:nth-child('+paginationPos+')').fadeIn(300);//Ocultamos los elementos de los slides y nada mas hacemos que aparezca el slide de la posicion que se clickeo
}


//-------- Funciones Registro ------//
let bodyRegistro=document.querySelector('#registroMenu');
let botonRegistro=document.querySelector('#profile');
let botonCerrarRegistro=document.querySelector('#imgX')
let tengoCuenta=document.querySelector('#tenesCuenta')

botonRegistro.addEventListener('click',abrirRegistro);
botonCerrarRegistro.addEventListener('click',cerrarRegistro);
tengoCuenta.addEventListener('click',yaTengoCuenta);


function cerrarRegistro(){
    bodyRegistro.style.display='none';
}

function yaTengoCuenta(){
    bodyLogin.style.display='block'; 
    bodyRegistro.style.display='none';
}
//-------- Funciones LogIn -------//
let bodyLogin=document.querySelector('#loginMenu')
let nuevo=document.querySelector('#sosNuevo');
let imgXL=document.querySelector('#imgXL');

nuevo.addEventListener('click',sosNuevo);
imgXL.addEventListener('click',cerrarLogin);

function abrirRegistro(){
    bodyLogin.style.display='block';
}
function sosNuevo(){
    bodyLogin.style.display='none'; 
    bodyRegistro.style.display='block';
}
function cerrarLogin(){
    bodyLogin.style.display='none';
}




