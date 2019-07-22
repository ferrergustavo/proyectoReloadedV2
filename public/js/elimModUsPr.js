let modalModif=document.querySelector('#modalModif');
let modalElim=document.querySelector('#modalEliminar')
let flex=document.querySelector('#flex');
let modif=document.querySelector('#modif');
let elim=document.querySelector('#eliminar')
let close=document.querySelector('#close');
let close2=document.querySelector('#close2');
let elimProduct=document.querySelector('#eliminarProduct');


modif.addEventListener('click',modificar);
close.addEventListener('click',cerrar);
elim.addEventListener('click',eliminar);
close2.addEventListener('click',cerrar2);
elimProduct.addEventListener('click',elimarElProducto);


function modificar(){
    modalModif.style.display='block';

}

function cerrar(){
    modalModif.style.display='none';
}

function eliminar(){
    modalElim.style.display='block';
}
function cerrar2(){
    modalElim.style.display='none';
}

function elimarElProducto(){
    swal({
        title: "Estás seguro?",
        text: "Una vez eliminado, no podrás recuperar este registro",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {    	
            document.getElementById("form-delete").submit();
            swal("El registro ha sido eliminado.", {
            icon: "success",
            });
        } else {
            swal("El registro no se ha eliminado.");
        }
    });
}


