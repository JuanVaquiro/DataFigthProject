const formulario = document.getElementById("form-evento")

const datos = []

formulario.addEventListener('submit', function(e){

    e.preventDefault()
    // alert('Hola')
    const dataForm = new FormData(formulario)

    fetch("./registrarEvento.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        console.log(data);

        if(data == "Registro Exitoso"){

            Swal.fire({
                icon: 'success',
                title: "Evento Creado"
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
                title: "complete los campos"
              })
        }

    })

})