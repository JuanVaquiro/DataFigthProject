window.addEventListener('DOMContentLoaded', () => {
    
    // let formData = new FormData()
    // formData.append('combate', combate)
    // formData.append('deportista', deportista)
    fetch("./setData.php", {
        // method: "POST",
        // body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        // console.log(data.deportistas[0].nombre)
        for(let deportista of data.deportistas){

            document.getElementById('deportista_1').innerHTML += `
                                                                <option value="${deportista.id}">${deportista.nombre}</option>
                                                                `

            document.getElementById('deportista_2').innerHTML += `
                                                                <option value="${deportista.id}">${deportista.nombre}</option>
                                                                `

        }
        // if (data != "./../home") {
        //     // capturarInfo(data)
        //     document.getElementById('deportista').innerText = (deportista == 1) ? data[0].deportista1 : data[0].deportista2
        //     document.getElementById('delegacion').innerText = (deportista == 1) ? data[0].delegacion1 : data[0].delegacion2
        //     document.getElementById('fase').innerText = data[0].ronda
        // } else {
        //     window.location = data
        // }
    })

})