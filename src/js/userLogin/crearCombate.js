const formulario = document.getElementById("form_config_combate")

const datos = []

formulario.addEventListener('submit', function(e){

    e.preventDefault()
    const dataForm = new FormData(formulario)

    fetch("./registrarCombate.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        // console.log(data);

        if(data == "Registro Exitoso"){

            Swal.fire({
                icon: 'success',
                title: "Combate registrado"
              })

            //   limpiar();

        }else if(data == "Error"){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Error al crear combate"
              })
        }else{
            Swal.fire({
                icon: 'warning',
                title: "Complete los campos"
              })
        }

    })
    
})