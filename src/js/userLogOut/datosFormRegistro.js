document.addEventListener('DOMContentLoaded', () => {
    let formData = new FormData()
    formData.append('registro', true)
    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        // console.log(data.deportistas[0].nombre)
        // console.log(data)

        for(let doc of data.tipoDocumento){

            document.getElementById('type_document').innerHTML += `
                                                            <option value="${doc.id}">${doc.nombre}</option>
                                                                `
        }


    })

})