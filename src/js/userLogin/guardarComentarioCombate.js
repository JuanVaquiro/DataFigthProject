const boton = document.getElementById('btn-save')
const comentario = document.getElementById('comentario')
boton.addEventListener('click', () => {
    let formData = new FormData();
    formData.append('comentario', comentario.value)

    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        
        console.log(data)

    })

})