document.addEventListener('DOMContentLoaded', () => {
    let formData = new FormData()
    formData.append('deportistas', true)
    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        // console.log(data.deportistas[0].nombre)
        console.log(data)

        for(let sex of data.sexo){

            document.getElementById('sexo').innerHTML += `
                                                            <option value="${sex.id}">${sex.sexo}</option>
                                                                `
        }

        for(let doc of data.tipo_doc){

            document.getElementById('tipo-documento').innerHTML += `
                                                            <option value="${doc.id}">${doc.nombre}</option>
                                                                `
        }

        for(let deporte of data.deportes){

            document.getElementById('deporte').innerHTML += `
                                                            <option value="${deporte.id}">${deporte.deporte}</option>
                                                                `
        }

        for(let estado of data.estados){

            document.getElementById('departamento').innerHTML += `
                                                            <option value="${estado.id}">${estado.estado}</option>
                                                                `
        }

        for(let ciudad of data.ciudades){

            document.getElementById('ciudad').innerHTML += `
                                                            <option value="${ciudad.id}">${ciudad.ciudad}</option>
                                                                `
        }

    })

})