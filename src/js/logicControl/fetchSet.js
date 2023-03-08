export function infoFight(){

    let deportista = 1;

    let formData = new FormData();
    formData.append('combate', 1);

    fetch("./logicControl.php",{

        method: "POST", 
        body: formData

    }) 
    .then( respuesta => respuesta.json())
    .then( data => {

        if(data != "./../home"){

            // console.log(data);
            document.getElementById('deportista').innerText = (deportista == 1) ? data[0].deportista1 : data[0].deportista2;
            document.getElementById('delegacion').innerText = (deportista == 1) ? data[0].delegacion1 : data[0].delegacion2;
            document.getElementById('fase').innerText = data[0].ronda;

        }else{
            window.location = data;
        }

    })

}