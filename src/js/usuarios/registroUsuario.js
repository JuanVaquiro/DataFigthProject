// const btnRegistrar = document.getElementById("btn-registrar");

// const { default: Swal } = require("sweetalert2");

const formularioRegistro = document.getElementById("form-registro");

formularioRegistro.addEventListener("submit", function(e){

    e.preventDefault();
    const dataForm = new FormData(formularioRegistro);
    // console.log(dataForm.get("name"));
    fetch("./../app/usuario/RegistroUsuario.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {
        console.log(data);
        Swal.fire(data);
        //swal(data[0]+"","",""+data[1]);
        // if (data == "Registro Exitoso") {

        //     swal(data+"","","success");

        // }

        // else {

        //     swal(data+"","","error");

        // }  

    })

});