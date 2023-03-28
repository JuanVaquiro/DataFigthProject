const inputPais = document.getElementById('pais');
const inputEstado = document.getElementById('departamento');
document.addEventListener('DOMContentLoaded', () => {
    let formData = new FormData()
    formData.append('delegacion', true)
    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        // console.log(data.deportistas[0].nombre)
        console.log(data)

        for(let pais of data.pais){

            document.getElementById('pais').innerHTML += `
                                                            <option value="${pais.id}">${pais.nombre}</option>
                                                                `
        }

    })

})

inputPais.addEventListener('input', () => {
    
    if(inputPais.value != " "){

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

                for(let estado of data.estados){
    
                    document.getElementById('departamento').innerHTML += `
                                                                            <option value="${estado.id}">${estado.estado}</option>
                                                                        `
                }
                
                inputEstado.disabled = false;
            }else{
                inputEstado.disabled = true;
            }
    
        })

    }else{
            
        document.getElementById('departamento').innerHTML = `<option value=" " id="default-option-departamento">Seleccione un departamento o estado</option>`
        inputEstado.disabled = true
    }

})