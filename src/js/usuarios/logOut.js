const btnCerraSession = document.getElementById('logOut');

btnCerraSession.addEventListener('click', cerrarSession);

function cerrarSession(){

    let desicion;

    if(desicion = confirmacion()){

        // console.log('hola');

        let formData = new FormData();
            formData.append('confirmacion', desicion);

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
}

function confirmacion(){
    let respuesta = confirm("¿Esta seguro/a de cerrar la session actual?");
    return respuesta;
}