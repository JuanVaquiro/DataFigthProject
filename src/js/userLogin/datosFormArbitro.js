// const inputPais = document.getElementById('pais')
// const inputEstado = document.getElementById('departamento')
// const inputCiudad = document.getElementById('ciudad')
document.addEventListener('DOMContentLoaded', () => {
    let formData = new FormData()
    formData.append('arbitro', true)
    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        // console.log(data.deportistas[0].nombre)
        console.log(data)

        for(let doc of data.tipoDocumento){

            document.getElementById('arbitro-tipo-documento').innerHTML += `
                                                            <option value="${doc.id}">${doc.nombre}</option>
                                                                `
        }

        for(let deporte of data.deportes){

            document.getElementById('deporte_arbitro').innerHTML += `
                                                            <option value="${deporte.id}">${deporte.deporte}</option>
                                                                `
        }

        
        for(let sex of data.sexo){

            document.getElementById('sexo_arbitro').innerHTML += `
                                                            <option value="${sex.id}">${sex.sexo}</option>
                                                                `
        }

        for(let categoria of data.categoriasArbitro){

            document.getElementById('categoria_arbitro').innerHTML += `
                                                            <option value="${categoria.id}">${categoria.nombre}</option>
                                                                `
        }

    })

})