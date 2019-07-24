//----Profile-----//

let openProfile = document.querySelector('.profile_logueado');
let containerProfile = document.querySelector('.profile_display');
let close_profile = document.querySelector('#imgXI');


openProfile.addEventListener('click',showProfile);
close_profile.addEventListener('click',closeProfile);

function showProfile(){
    containerProfile.style.display ="block";
    containerBusqueda.style.display="none";
    mySidebar.style.display = 'none';
}

function closeProfile(){
    containerProfile.style.display="none";
    container.style.opacity = "1";
}
