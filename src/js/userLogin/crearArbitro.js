const formulario = document.getElementById("form-crear-arbitro")

const datos = []

formulario.addEventListener('submit', function(e){

    e.preventDefault()
    // alert('Hola')
    const dataForm = new FormData(formulario)

    fetch("./registrarArbitro.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        console.log(data);

        if(data == "Registro Exitoso"){

            Swal.fire({
                icon: 'success',
                title: "Arbitro Registrado"
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