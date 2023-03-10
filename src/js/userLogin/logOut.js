const btnCerraSession = document.getElementById('logOut');

btnCerraSession.addEventListener('click', confirmacion);

function cerrarSession(){

        // console.log('hola');
        let formData = new FormData();
            formData.append('confirmacion', true);

        fetch("./../logOut.php",{

            method: "POST", 
            body: formData
    
        }) 
        .then( respuesta => respuesta.json())
        .then( data => {
            // console.log(data);
                window.location = data;
    
        })
}

function confirmacion(){
    // let respuesta = confirm("¿Esta seguro/a de cerrar la session actual?");
    // return respuesta;

    Swal.fire({
        title: '¿Esta seguro/a de cerrar la session actual?',
        // text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
        //   Swal.fire(
        //     'Deleted!',
        //     'Your file has been deleted.',
        //     'success'
        //   )
            cerrarSession();
            
        }
      })
}