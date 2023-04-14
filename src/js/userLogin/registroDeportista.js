// const btnRegistrar = document.getElementById("btn-registrar");

// const { default: Swal } = require("sweetalert2");

const formularioRegistro = document.getElementById("form-crear-deportista");

const datos = ['floating_name', 'floating_last-name', 'tipo-documento', 'floating_doc', 'sexo', 'ciudad', 
'floating_phone', 'floating_email', 'floating_fecha_Nacimiento'];

formularioRegistro.addEventListener("submit", function(e){

    e.preventDefault();
    const dataForm = new FormData(formularioRegistro);
    // console.log(dataForm.get("name"));
    fetch("./registrarDeportista.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        // console.log(data);

        if(data == "Registro Exitoso"){

            Swal.fire({
                icon: 'success',
                title: "Deportista Creado"
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

});

function limpiar(){

    for(let i = 0; i < datos.length; i++){

        if(datos[i] != "type_document"){

            document.getElementById(datos[i]).value = "";

        }
        else{
            document.getElementById('default-option').selected = true;
        }

    }

    document.getElementById('name').focus();

}