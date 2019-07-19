
window.onload = function(){
    alert("hello there");
        let eliminar=document.querySelector('#eliminar');
        let modificar=document.querySelector('#modif');
        eliminar.onclick=function(){
            Swal.fire({
                title: 'Estas seguro de eliminar este usuario?',
                text: "Una vez borrado no se puede recuperar!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si,quiero eliminarlo!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Eliminado!',
                    'success'
                    )
                }
                })
        }
        modificar.onclick=function(){
            Swal.fire({
                title: 'Seguro que queres modificar este usuario?',
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: 'green',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Modificar'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Modificando'
                    )
                }
                })
                Swal.clickConfirm({
                   // location.href='/admUser/editUser/{{$user->id}}';
                })
        }
}