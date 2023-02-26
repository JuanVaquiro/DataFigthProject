const formularioLogin = document.getElementById("form-login");
formularioLogin.addEventListener("submit", function(e){
    e.preventDefault();
    const dataForm = new FormData(formularioLogin);
    fetch("./login.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {
        
        if(data != "Usuario o Contraseña Incorrectos"){
            window.location = data;
        }
        else{
            // console.log(data);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data,
                footer: '<a href="">¿No tienes cuenta? Registrate aqui</a>'
              })
        } 

    })
});