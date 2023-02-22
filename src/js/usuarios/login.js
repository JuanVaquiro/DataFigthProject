const formularioLogin = document.getElementById("form-login");
formularioLogin.addEventListener("submit", function(e){
    e.preventDefault();
    const dataForm = new FormData(formularioLogin);
    fetch("./../app/usuario/LoginUsuario.php",{

        method: "POST", 
        body: dataForm

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {
        
        if(data != "Usuario o Contraseña Incorrectos"){
            window.location = data;
        }
        else{
            console.log(data);
        } 

    })
});