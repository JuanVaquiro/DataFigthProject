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
        
        if(data == "./home"){
            window.location = data;
        }
        else if(data == "Complete los campos"){
            // console.log(data);
            Swal.fire({
                icon: 'warning',
                title: data
              })
        }
        else{
            Swal.fire({
                icon: 'error',
                title: data
              })
        } 

    })
});