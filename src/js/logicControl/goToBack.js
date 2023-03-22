import { MODAL_GO_TO_BACK, MODAL_CLOSE_GO_TO_BACK, MODAL_SAVE_GO_TO_BACK } from './constDOM.js'
import { timerSelect } from './index.js'
import { setGoToBackPost } from './fetchsData.js' 

function saveGoToBack() {
  console.log('data:', catchRegisterUpdate()) // 👈 catchRegisterUpdate() captur el objeto de los radios selecciondos
  setGoToBackPost(catchRegisterUpdate())
  timerSelect.start()
  MODAL_GO_TO_BACK.style.display = 'none'
  resetChecked()
}

export function windowModalGoToBack() {
  MODAL_GO_TO_BACK.style.display = 'block'
  timerSelect.stop()
  MODAL_CLOSE_GO_TO_BACK.addEventListener('click', function () {
    timerSelect.start()
    MODAL_GO_TO_BACK.style.display = 'none'
    MODAL_GO_TO_BACK.addEventListener('reset', resetChecked())
  })

  window.addEventListener('click', function (event) {
    if (event.target === MODAL_GO_TO_BACK) {
      timerSelect.start()
      MODAL_GO_TO_BACK.style.display = 'none'
      MODAL_GO_TO_BACK.addEventListener('reset', resetChecked())
    }
  })

  MODAL_SAVE_GO_TO_BACK.addEventListener('click', saveGoToBack)
}

function catchRegisterUpdate() {
  const registro = {}

  const hitSelect = document.querySelector('input[name="resgistro-golpe"]:checked')
  const positionSelect = document.querySelector('input[name="registro-posicion"]:checked')
  const locationHitSelect = document.querySelector('input[name="registro-ubicacion"]:checked')
  const pointSelect = document.querySelector('input[name="registrar-punto"]:checked')

  // registro.golpeo = 0

  // store the selected values in the object  
  if (hitSelect) {
    registro.golpe = parseInt(hitSelect.value)
  }
  if (positionSelect) {
    registro.posicion = parseInt(positionSelect.value)
  }
  if (locationHitSelect) {
    registro.ubicacion = parseInt(locationHitSelect.value)
    registro.golpeo = 1
  }
  if (pointSelect) {
    registro.punto = parseInt(pointSelect.value)
  }
  return registro
}

function resetChecked() {
  const inputs = MODAL_GO_TO_BACK.querySelectorAll('input[type=radio]')
  inputs.forEach(input => {
    input.checked = false
  })
}
