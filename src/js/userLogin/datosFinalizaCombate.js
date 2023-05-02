document.addEventListener('DOMContentLoaded', () => {
    let formData = new FormData()
    formData.append('fin-combate', true)
    fetch("./../setData.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {

        // console.log(data.deportistas[0].nombre)
        console.log(data)

        for(const datos of data.dataCombate){

            document.getElementById('nombre-deportista').innerText = `${datos.nombre_deportista}`
            document.getElementById('delegacion-deportista').innerText = `${numeroDeportista == 1 ? datos.delegacion_deportista1:datos.delegacion_deportista2}`
            document.getElementById('fase-ronda').innerText = `${datos.ronda_fase}`
            document.getElementById('total-rounds').innerText = `${datos.rounds_totales}`
            document.getElementById('tiempo-round').innerText = `${datos.tiempo_round} min`
            document.getElementById('rounds-ganados').innerText = `${datos.rounds_ganados}`
            document.getElementById('total-faltas').innerText = `${datos.total_faltas}`

        }

    })

})