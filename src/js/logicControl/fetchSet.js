import { capturarInfo } from './index.js'

export function infoFight(deportista, combate) {
    let formData = new FormData()
    formData.append('combate', combate)

    fetch("./logicControl.php", {
        method: "POST",
        body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        if (data != "./../home") {
            console.log('data: ', data)
            capturarInfo(data)
            document.getElementById('deportista').innerText = (deportista == 1) ? data[0].deportista1 : data[0].deportista2
            document.getElementById('delegacion').innerText = (deportista == 1) ? data[0].delegacion1 : data[0].delegacion2
            document.getElementById('fase').innerText = data[0].ronda

        } else {
            window.location = data
        }
    })
}
