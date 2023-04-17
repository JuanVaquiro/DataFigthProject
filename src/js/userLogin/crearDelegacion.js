const formulario = document.getElementById("form-delegacion")

const datos = []

formulario.addEventListener('submit', function(e){

    e.preventDefault()
    const dataForm = new FormData(formulario)

    fetch("./registrarDelegacion.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        // console.log(data);

        if(data == "Registro Exitoso"){

            Swal.fire({
                icon: 'success',
                title: "Delegacion registrada"
              })

            //   limpiar();

        }else if(data == "Error Al Registrar"){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Error al crear deportista"
              })
        }else{
            Swal.fire({
                icon: 'warning',
                title: data
              })
        }

    })
})