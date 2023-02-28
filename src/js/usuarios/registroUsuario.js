// const btnRegistrar = document.getElementById("btn-registrar");

// const { default: Swal } = require("sweetalert2");

const formularioRegistro = document.getElementById("form-registro");

const datos = ['name', 'last-name', 'type_document', 'document', 'email', 'telefono', 'date', 'password', 'confirm-password'];

formularioRegistro.addEventListener("submit", function(e){

    e.preventDefault();
    const dataForm = new FormData(formularioRegistro);
    // console.log(dataForm.get("name"));
    fetch("./registrarUsuario.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        if(data == "Registro Exitoso"){

            Swal.fire({
                icon: 'success',
                title: data
              })

              limpiar();

        }else if(data == "Error Al Registrar"){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data
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