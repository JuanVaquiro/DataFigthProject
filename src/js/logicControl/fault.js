import { MODAL_TOGGLE_FAULT, MODAL_RADIO_FAULT, DISPLAY_FAULT, } from './constDOM.js'
import { timerSelect, roundCount } from './index.js'
import { setFaultPost } from './fetchsData.js'

let faultCount = 0

export function saveFault() {
  console.log('guardado:', catchFault())
  setFaultPost(catchFault())
  setFaultCount()
  capturarInfo()
  for (const radioButton of MODAL_RADIO_FAULT) {
    if (radioButton.checked) {
      radioButton.checked = false;
    }
  }
}

function catchFault() {
  const timerFault = parseFloat(timerSelect.getTime())
  for (const radioButton of MODAL_RADIO_FAULT) {
    if (radioButton.checked) {
      let selectedValue = parseInt(radioButton.value)
      return {
        falta: selectedValue,
        tiempoFalta: timerFault,
        round: roundCount,
      }
    }
  }
}

function setFaultCount() {
  faultCount++
  DISPLAY_FAULT.textContent = faultCount
}

export function windosModalFault() {
  // Recorre cada botón de alternar modal y agrega un listener de clic
  MODAL_TOGGLE_FAULT.forEach((toggle) => {
    toggle.addEventListener('click', () => {
      timerSelect.stop()
      const target = toggle.dataset.modalTarget // Obtiene el ID del modal a mostrar
      const modal = document.getElementById(target) // Obtiene el elemento del modal a mostrar
      modal.classList.toggle('hidden') // Muestra o oculta el modal al alternar la clase 'hidden'
      modal.setAttribute('aria-hidden', 'false') // Establece el atributo 'aria-hidden' en 'false' cuando el modal está visible
      modal.setAttribute('tabindex', '0') // Establece el atributo 'tabindex' en '0' para que el modal sea accesible mediante el teclado
    })

  })
  // Obtener todos los elementos del botón para ocultar el modal
  const modalHide = document.querySelectorAll('[data-modal-hide]')
  // Recorre cada botón para ocultar el modal y agrega un listener de clic
  modalHide.forEach((hide) => {
    hide.addEventListener('click', () => {
      timerSelect.start()
      const modal = hide.closest('.h-modal') // Obtiene el elemento del modal más cercano
      modal.classList.add('hidden') // Oculta el modal al agregar la clase 'hidden'
      modal.setAttribute('aria-hidden', 'true') // Establece el atributo 'aria-hidden' en 'true' cuando el modal está oculto
      modal.setAttribute('tabindex', '-1') // Establece el atributo 'tabindex' en '-1' para que el modal no sea accesible mediante el teclado
    })
  })
  window.addEventListener('click', function (event) {
    if (event.target === MODAL_TOGGLE_FAULT) {
      MODAL_TOGGLE_FAULT.style.display = 'none'
    }
  })
}
