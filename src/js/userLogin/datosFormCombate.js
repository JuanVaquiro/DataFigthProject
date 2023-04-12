window.addEventListener('DOMContentLoaded', () => {
    
    let formData = new FormData()
    formData.append('config-combate', true)
    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        // console.log(data.deportistas[0].nombre)
        console.log(data)
        for(let deportista of data.deportistas){

            document.getElementById('deportista_1').innerHTML += `
                                                                <option value="${deportista.id}">${deportista.nombre}</option>
                                                                `

            document.getElementById('deportista_2').innerHTML += `
                                                                <option value="${deportista.id}">${deportista.nombre}</option>
                                                                `
        }

        for(let delegacion of data.delegaciones){

            document.getElementById('delegacion_1').innerHTML += `
                                                                <option value="${delegacion.id}">${delegacion.nombre} (${delegacion.siglas})</option>
                                                                `

            document.getElementById('delegacion_2').innerHTML += `
                                                                <option value="${delegacion.id}">${delegacion.nombre} (${delegacion.siglas})</option>
                                                                `
        }

        // for(let deportes of data.deportes){

        //     document.getElementById('deportes').innerHTML += `
        //                                                         <div class="flex items-center">
        //                                                     <input id="deporte-radio-1" type="radio" value="${deportes.id}" name="deporte-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
        //                                                     <label for="deporte-radio-1" class="ml-2 text-sm font-medium text-gray-300">
        //                                                         ${deportes.deporte}
        //                                                     </label>
        //                                                 </div>
        //                                     `

        // }

        for(let fasesCombate of data.fases){

            document.getElementById('fase-ronda').innerHTML += `
                                                                <option value="${fasesCombate.id}">${fasesCombate.nombre}</option>
                                                                `

        }

        for(let arbitro of data.arbitros){

            document.getElementById('arbitro').innerHTML += `
                                                                <option value="${arbitro.id}">${arbitro.nombre}</option>
                                                                `

        }

        for(let evento of data.eventos){

            document.getElementById('evento').innerHTML += `
                                                                <option value="${evento.id}">${evento.nombre}</option>
                                                                `
        }
        
    })

})