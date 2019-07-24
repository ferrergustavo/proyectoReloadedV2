//----Profile-----//

let openProfile = document.querySelector('.profile_logueado');
let containerProfile = document.querySelector('.profile_display');
let close_profile = document.querySelector('#imgXI');
let openProfileLog = document.querySelector('.Perfil__')


openProfile.addEventListener('click',showProfile);
close_profile.addEventListener('click',closeProfile);
openProfileLog.addEventListener('click',showProfile);

function showProfile(){
    containerProfile.style.display ="block";
    containerBusqueda.style.display="none";
    mySidebar.style.display = 'none';
}

function closeProfile(){
    containerProfile.style.display="none";
    container.style.opacity = "1";
}
