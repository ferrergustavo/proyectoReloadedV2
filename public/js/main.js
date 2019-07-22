window.addEventListener('load',cargar)

function cargar(){

    //---- Slider----//
    
    const slider = document.querySelector('.slider');

    console.log(slider);

    const slides = document.querySelector('.slider_');

    console.log(slides);

    const sliderLeft = document.querySelector('.control-left');
    
    console.log(sliderLeft);

    const sliderRight = document.querySelector('.control-right');

    console.log(sliderRight);


    function slideLeft() {
        
        let activeSlide = document.querySelector('.slider-active'); 
    
        let previousSlide = activeSlide.previousElementSibling;
    
        if (previousSlide !== null){
            activeSlide.classList.add('slider-hidden');
            activeSlide.classList.remove('slider-active');

        previousSlide.classList.remove('slider-hidden');

        previousSlide.classList.add('slider-active');
    }else{

        activeSlide.classList.add('slider-hidden');

        activeSlide.classList.remove('slider-active');

        slider.lastElementChild.classList.remove('slider-hidden');

        slider.lastElementChild.classList.add('slider-active');
    }
}


function slideRight() {
   
    let activeSlide = document.querySelector('.slider-active');
   
    let nextSlide = activeSlide.nextElementSibling;
   
    if (nextSlide !== null) {
     activeSlide.classList.add('slider-hidden');
   
     activeSlide.classList.remove('slider-active');
   
     nextSlide.classList.remove('slider-hidden');
   
     nextSlide.classList.add('slider-active');
    } else {
     
     activeSlide.classList.add('slider-hidden');
   
     activeSlide.classList.remove('slider-active');
   
     slider.firstElementChild.classList.remove('slider-hidden');
   
     slider.firstElementChild.classList.add('slider-active');
    }
   };

        

    sliderLeft.addEventListener('click', slideLeft);

    sliderRight.addEventListener('click', slideRight);

   

   //-------------- Con Botones del teclado--------------//

   document.onkeyup = function(evento){
    if(event.keyCode==39){
        slideRight();
    }else if(event.keyCode==37){
        slideLeft();
    }
    };

    //-------------------------Boton Shop-----------------------------------//

        let show_sidebar = document.querySelector('.shop_Icon');
        let mySidebar = document.querySelector('.shop_display')
        let close_sidebar = document.querySelector('.closebtn');
        let container = document.querySelector('.slideshow');

        show_sidebar.onclick = function(){
            mySidebar.style.width = "40%";
            container.style.opacity = "0.5";
        }

        close_sidebar.onclick = function(){
            mySidebar.style.width = "0";
            container.style.opacity = "1";
        }

    }

  //------- Accordion Navbar-------//

    let accordions = document.getElementsByClassName('accordion_button');
    console.log(accordions);
    for(let i = 0; i < accordions.length;i++){
        accordions[i].onclick = function(){
            let content = this.nextElementSibling;
            console.log(content);

        if(content.style.maxHeight){
            content.style.maxHeight = null ;
        }else{
            content.style.maxHeight = 200 +"px";
        }
        }

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

// ----- VALIDACION REGISTRO JS ----- //
window.onload = function(){
    let form=document.querySelector('#form_Register');
    form.elements.first_name.focus();
    console.log(form.elements);
     form.onsubmit = function(e) {
         if (!validaciones()) {
             e.preventDefault();
         }else{
             form.submit();
         }
     }
     function validaciones(){
         let {first_name,last_name,email,password,confirmPassRegistro}=form.elements;
         if (!validarFirst_name(first_name))return false;
         if (!validarLast_name(last_name)) return false;
         if (!validarEmail(email)) return false;
         if (!validarPassword(password))return false;
         if (!validarConfirmPassRegistro(confirmPassRegistro,password))return false;
         return true;
     }
     function validarFirst_name(first_name){
         first_name.classList.add('is-invalid');
         let errorFirst_name = document.querySelector('#errorFirst_name');
         let reFirst_name=/^[a-zA-Z]{2,16}$/;
         if(!reFirst_name.test(first_name.value)){
             errorFirst_name.innerHTML="<strong>Nombre Invalido</strong>";
             return false;
         }else{
             errorFirst_name.innerHTML="";
             first_name.classList.remove('is-invalid');
             first_name.classList.add('is-valid');
             form.last_name.focus();
             return true;
         }
     }
   
     function validarLast_name(last_name){
        last_name.classList.add('is-invalid');
        let errorlast_name = document.querySelector('#errorLast_name');
        let reLast_name=/^[a-zA-Z]{2,16}$/;
        if(!reLast_name.test(last_name.value)){
            errorlast_name.innerHTML="<strong>Apellido Invalido</strong>";
            return false;
        }else{
            errorLast_name.innerHTML="";
            last_name.classList.remove('is-invalid');
            last_name.classList.add('is-valid');
            form.email.focus();
            return true;
        }
    }

     function validarEmail(email){
         email.classList.add('is-invalid');
         let errorEmail = document.querySelector('#errorEmail');
         let reEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
         if (!reEmail.test(email.value)) {
             errorEmail.innerHTML= "<strong>email Invalido</strong>";
             return false;
         }else{
             errorEmail.innerHTML="";
             email.classList.remove('is-invalid');
             email.classList.add('is-valid');
             form.password.focus();
             return true;}
     }
     function validarPassword(password){
         password.classList.add('is-valid');
         let errorPassword=document.querySelector('#errorPassword');
         let rePassword=/^[a-zA-Z0-9-_]{8,16}$/;
         if (!rePassword.test(password.value)) {
             errorPassword.innerHTML="<strong>Contraseña Invalido</strong>"
             return false;
         }else{
             errorPassword.innerHTML="";
             errorPassword.classList.remove('is-invalid');
             errorPassword.classList.add('is-valid');
             form.confirmPassRegistro.focus();
             return true;
         }
     }
 }