/* window.addEventListener('load',cargar);

let cargar=function(){

} */
window.onload=function(){
    Swal.fire(
        'HOLIS')
}

window.onload=function(){
    miH1= document.querySelector('h1');
    console.log (miH1);

    miH1.onmouseover=function(){
        miH1.style.color="purple";

    }
    miH1.onmouseout=function(){
        miH1.style.color="white";

    }
}