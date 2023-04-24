import { capturarInfo } from './index.js'

export function infoFight(deportista, combate) {
    let formData = new FormData()
    formData.append('combate', combate)
    formData.append('deportista', deportista)
    fetch("./logicControl.php", {
        method: "POST",
        body: formData
    })
        .then(respuesta => respuesta.json())
        .then(data => {
            if (data != "./../home") {
                let deporstista = (deportista == 1) ? data[0].deportista1 : data[0].deportista2
                let delegacion = (deportista == 1) ? data[0].delegacion1 : data[0].delegacion2
                document.getElementById('deportista').innerText = deporstista
                document.getElementById('delegacion').innerText = delegacion
                document.getElementById('fase').innerText = data[0].ronda
                capturarInfo(data, deporstista, delegacion)
            } else {
                window.location = data
            }
        })
}
