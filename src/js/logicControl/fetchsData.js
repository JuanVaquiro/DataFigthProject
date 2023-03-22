//  aqui podras poner las funciones FETCH para hacer las devias peticiones

export function setMotionPost(motions) {
  try {
    let formdata = new FormData()
    formdata.append('golpe', motions.golpe)
    formdata.append('posicion', motions.posicion)
    formdata.append('ubicacion', motions.ubicacionGolpe)
    formdata.append('golpeo', motions.golpeoAcertado)
    formdata.append('punto', motions.punto)
    formdata.append('round', motions.round)
    formdata.append('segundo', motions.timepoGolpe)

    fetch('./logicControl.php', {
      method: 'POST',
      body: formdata
    })
      .then(respuesta => respuesta.json())
      .then(data => {
        console.log(data)
        Swal.fire({
          toast: true,
          title: 'Los datos se han enviado con éxito',
          icon: 'success',
          position: 'top-end',
          showConfirmButton: false,
          timer: 1000
        })
      })
  } catch (error) {
    console.error(error)
    Swal.fire({
      toast: true,
      title: 'Oups! ha ocurrido un error',
      icon: 'error',
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    })
  }
}

export function setFaultPost(fault) {
  try {
    let formdata = new FormData()
    formdata.append('falta', fault.falta)
    formdata.append('tiempo', fault.tiempoFalta)
    formdata.append('round', fault.round)

    fetch('./logicControl.php', {
      method: 'POST',
      body: formdata
    })
      .then(respuesta => respuesta.json())
      .then(data => {
        console.log(data)
        Swal.fire({
          toast: true,
          title: 'Falta Registrada',
          icon: 'success',
          position: 'top-end',
          showConfirmButton: false,
          timer: 1000
        })
      })
  } catch (error) {
    console.error(error)
    Swal.fire({
      toast: true,
      title: 'Oups! ha ocurrido un error',
      icon: 'error',
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    })
  }

}

// 👇 fetch para hacer la peticion de boton regresar (UPDATE)
export function setGoToBackPost(datos) {
  // console.log('POST')
  try {

    let formdata = new FormData()
    formdata.append('golpe', datos.golpe)
    formdata.append('golpeo', datos.golpeo)
    formdata.append('posicion', datos.posicion)
    formdata.append('ubicacion', datos.ubicacion)
    formdata.append('punto', datos.punto)
    formdata.append('update', true)

    fetch('./logicControl.php', {
      method: 'POST',
      body: formdata
    })
      .then(respuesta => respuesta.json())
      .then(data => {
        // console.log(data)
        Swal.fire({
          toast: true,
          title: data,
          icon: 'success',
          position: 'top-end',
          showConfirmButton: false,
          timer: 1000
        })
      })
  } catch (error) {
    console.error(error)
    Swal.fire({
      toast: true,
      title: 'Oups! ha ocurrido un error',
      icon: 'error',
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    })
  }
  

}

// 👇 fetch para hacer la peticion de boton Finalizar Combate
// export function set(params) {

// }