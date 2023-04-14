const inputPais = document.getElementById('pais')
const inputEstado = document.getElementById('departamento')
const inputCiudad = document.getElementById('ciudad')
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

        for(let pais of data.paises){

            document.getElementById('pais').innerHTML += `
                                                            <option value="${pais.id}">${pais.nombre}</option>
                                                                `
        }

    })

})

inputPais.addEventListener('input', () => {
    
    if( inputPais.value != " " && !isNaN(inputPais.value) ){

        let formData = new FormData()
        // formData.append('estado', true)
        formData.append('pais', inputPais.value)
        fetch("./../setData.php", {
            method: "POST",
            body: formData
        })
        .then(respuesta => respuesta.json())
        .then(data => {
            // console.log(data.deportistas[0].nombre)
            console.log(data)


            if(data.estados.length > 0){

                document.getElementById('departamento').innerHTML = `<option value=" " id="default-option-departamento">Seleccione un departamento o estado</option>`

                for(let estado of data.estados){
    
                    document.getElementById('departamento').innerHTML += `
                                                                            <option value="${estado.id}">${estado.estado}</option>
                                                                        `
                }
                
                inputEstado.disabled = false

                document.getElementById('ciudad').innerHTML = `<option value=" " id="default-option-departamento">Seleccione una ciudad</option>`

                SET_DATA_ESTADOS()
                
            }else{
                inputEstado.disabled = true
                document.getElementById('departamento').innerHTML = `<option value=" " id="default-option-departamento">Seleccione un departamento o estado</option>`
            }
    
        })

    }else{
            
        document.getElementById('departamento').innerHTML = `<option value=" " id="default-option-departamento">Seleccione un departamento o estado</option>`
        inputEstado.disabled = true

        document.getElementById('ciudad').innerHTML = `<option value=" " id="default-option-departamento">Seleccione una ciudad</option>`
        inputCiudad.disabled = true
    }

})

function SET_DATA_ESTADOS(){

    inputEstado.addEventListener('input', () => {

        if( (inputEstado.value != " " && inputPais.value != " ") && (!isNaN(inputEstado.value) && !isNaN(inputPais.value)) ){
    
            let formData = new FormData()
            // formData.append('estado', true)
            formData.append('estado', inputEstado.value)
            fetch("./../setData.php", {
                method: "POST",
                body: formData
            })
            .then(respuesta => respuesta.json())
            .then(data => {
                // console.log(data.deportistas[0].nombre)
                console.log(data)
                if(data.ciudades.length > 0){
    
                    document.getElementById('ciudad').innerHTML = `<option value=" " id="default-option-ciudad">Seleccione una ciudad</option>`
        
                    for(let ciudad of data.ciudades){
        
                        document.getElementById('ciudad').innerHTML += `
                                                                        <option value="${ciudad.id}">${ciudad.ciudad}</option>
                                                                            `
                    }
                    
                    inputCiudad.disabled = false
                }else{
                    inputCiudad.disabled = true
                }
        
            })
    
        }else{
            document.getElementById('ciudad').innerHTML = `<option value=" " id="default-option-ciudad">Seleccione una ciudad</option>`
            inputCiudad.disabled = true
        }
    
    })
}