export function infoFight(){

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
            document.getElementById('deportista').innerText = data[0].deportista1;
            document.getElementById('delegacion').innerText = data[0].delegacion1;
            document.getElementById('fase').innerText = data[0].ronda;

        }else{
            window.location = data;
        }

    })

}