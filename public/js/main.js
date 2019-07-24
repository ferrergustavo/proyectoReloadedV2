
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
            container.style.opacity = "1";
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
            bodyRegistro.style.display='none';
            mySidebar.style.display = 'none';
            containerBusqueda.style.display="none";
        }
        function sosNuevo(){
            bodyLogin.style.display='none'; 
            bodyRegistro.style.display='block';
        }

        function cerrarLogin(){
            bodyLogin.style.display='none';
            container.style.opacity = "1";
        }
            
            /* ---- Validacion Registro -----*/
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
                 if (!validarConfirmPassRegistro(password_confirmation,password))return false;
                 return true;
             }
            
             function validarFirst_name(first_name){
                 let errorFirst_name = document.querySelector('#errorFirst_name');
                 //let reFirst_name=/^[a-zA-Z]{2,16}$/;
                 if(first_name.length<2){
                     errorFirst_name.innerHTML="<strong>Nombre Invalido</strong>";
                     return false;
                 }else{
                     errorFirst_name.innerHTML="";
                     form.last_name.focus();
                     return true;
                 }
             }
            
             function validarLast_name(last_name){
                let errorlast_name = document.querySelector('#errorLast_name');
                if(last_name.length<2){
                    errorlast_name.innerHTML="<strong>Apellido Invalido</strong>";
                    return false;
                }else{
                    errorLast_name.innerHTML="";
                    form.email.focus();
                    return true;
                }
            }
            
             function validarEmail(email){
                 let errorEmail = document.querySelector('#errorEmail');
                 let reEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
                 if (!reEmail.test(email.value)) {
                     errorEmail.innerHTML= "<strong>email Invalido</strong>";
                     return false;
                 }else{
                     errorEmail.innerHTML="";
                     form.password.focus();
                     return true;
                    }
             }
             function validarPassword(password){
                 let errorPassword=document.querySelector('#errorPassword');
                 if (password.length<8) {
                     errorPassword.innerHTML="<strong>Contraseña Invalida</strong>"
                     return false;
                 }else{
                     errorPassword.innerHTML="";
                     form.confirmPassRegistro.focus();
                     return true;
                 }
             }
             function validarConfirmPassRegistro(password_confirmation,password){
                 let errorConfirmPassRegistro=document.querySelector('#errorConfirmPassRegistro');
                 if(password_confirmation!=password){
                     errorConfirmPassRegistro.innerHTML="<strong>las contraseñas no coinciden</strong>";
                     return false;
                 }else{
                     errorConfirmPassRegistro.innerHTML="";
                     return true;
                 }
             }

             /* ---- Finaliza Validacion Registro ---*/

        
        

        
    




        
    
