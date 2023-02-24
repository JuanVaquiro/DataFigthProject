// hits
const btnLeftFoot = document.getElementById('patada_izquierda')
const btnRightFoot = document.getElementById('patada_derecha')
const btnLeftFist = document.getElementById('puño_izquierdo')
const btnRightFist = document.getElementById('puño_derecho')
const btnSpinKick = document.getElementById('patada_con_giro')
// position 
const btnForward = document.getElementById('delante')
const btnBack = document.getElementById('trasera')
// locationHit
const btnHelmet = document.getElementById('casco')
const btnPechera = document.getElementById('pechera')
const btnConfirmPoint = document.getElementById('confirmar_punto')
// menu
const btnStartRound = document.getElementById('iniciar_ronda')
const btnFinalFight = document.getElementById('finalizar_combate')
const btnSaveMotion = document.getElementById('guardar_movimiento')
const btnPause = document.getElementById('pausar')
const btnAcceptFoul = document.getElementById('boton_aceptar_falta')
// info figtht
const btnChangeTimer = document.getElementById('cambiar_tiempo')
const displayTimer = document.getElementById('tiempo')
const displayFault = document.getElementById('contador_faltas')
const displayRound = document.getElementById('round')
// view modal timer finish
const modalTimer = document.getElementById('modal')
const closeButtonModal = document.getElementById('close_button_modal')
const textModal = document.getElementById('text_modal')
// view modal alert
const modalMessage = document.getElementById('modal_contiainer')
const btnCloseModal = document.getElementById('modal_close_message')
const modalText = document.getElementById('modal_meesage')
// view modal changes timer
const modalChangeTimer = document.getElementById('modal_cambiar_tiempo')
const closeModalTimer = document.getElementById('cerrar_modal')
const minutesInput = document.getElementById('minutes-input')
const secondsInput = document.getElementById('seconds-input')
const btnSaveTime = document.getElementById('guardar_tiempo')
// get all elements of the modal toggle button
const modalToggle = document.querySelectorAll('[data-modal-toggle]')
const radioButtons = document.getElementsByName('bordered_radio')

import { setMotionPost } from "./fetchsData"

const VALUE_FOOT_LEFT = 1
const VALUE_FOOT_RIGHT = 2
const VALUE_HIT_LEFT = 3
const VALUE_HIT_RIGHT = 4
const VALUE_SPIN_KICK = 5
const VALUE_FORWARD = 1
const VALUE_BACK = 2
const VALUE_HELMET = 1
const VALUE_PECHERA = 2

let isOnRound = false
let isOnTimer = false
let timerSelect = 0
let minutes = 60 * 0.5 // 👈 assign duration to the round time
let clearIntervalID = 0
let setTimerValue = 0
let roundCount = 0
let roundFault = 0
let getTimerHit = 0
let hitValue = 0
let positionValue = 0
let locationHitValue = 0
let pointValue = 0
let confirmPoint = false
let kickedValue = 0

btnLeftFist.disabled = true
btnRightFist.disabled = true
btnLeftFoot.disabled = true
btnRightFoot.disabled = true
btnSpinKick.disabled = true
btnBack.disabled = true
btnForward.disabled = true
btnHelmet.disabled = true
btnPechera.disabled = true
btnSaveMotion.disabled = true

// init click
btnStartRound.addEventListener('click', finishOrStartRound)
btnStartRound.addEventListener('click', executeFnt())

function finishOrStartRound() {
  isOnRound = !isOnRound
  if (isOnRound) {
    btnStartRound.textContent = 'Terminar Round --'
    isOnTimer = false
    btnPause.textContent = 'Pausar'
    timerSelect = startTimer(minutes, displayTimer)
    setRoundCount()
  } else {
    btnStartRound.textContent = 'Iniciar Round ++'
    clearInterval(clearIntervalID)
  }
  btnDisabled()
}

function startTimer(duration, display) {
  let isTimerRunning = true

  const formatTime = (time) => (time < 10 ? `0${time}` : time)

  const setTimer = () => {
    if(!isTimerRunning) return
    let minutes = parseInt(duration / 60, 10)
    let seconds = parseInt(duration % 60, 10)

    minutes = formatTime(minutes)
    seconds = formatTime(seconds)

    display.textContent = `${minutes}:${seconds}`
    setTimerValue = `${minutes}.${seconds}`

    if (--duration < 0) {
      clearInterval(clearIntervalID)
      windowModalFinishTimer("tiempo agotado.")
    }
  }

  clearIntervalID = setInterval(setTimer, 1000) // 👈 speed timer delay in the Interval: ⏲ milliseconds: 0.75 = 1600, 0.50 = 2000, 0.25 = 4000

  const stopTimer = () => {
    isTimerRunning = false
  }

  const startRunTimer = () => {
    isTimerRunning = true
  }

  return {
    stop: stopTimer,
    start: startRunTimer,
  }
}

function pauseTimer() {
  timerSelect.stop()
  windowModalMessagePause('Combate pausado')
  btnPause.textContent = 'Tiempo-pausado'
}

function executeFnt() {
  btnLeftFoot.addEventListener('click', () => setHitValue(VALUE_FOOT_LEFT))
  btnRightFoot.addEventListener('click', () => setHitValue(VALUE_FOOT_RIGHT))
  btnLeftFist.addEventListener('click', () => setHitValue(VALUE_HIT_LEFT))
  btnRightFist.addEventListener('click', () => setHitValue(VALUE_HIT_RIGHT))
  btnSpinKick.addEventListener('click', () => setHitValue(VALUE_SPIN_KICK))
  btnForward.addEventListener('click', () => setPositionValue(VALUE_FORWARD))
  btnBack.addEventListener('click', () => setPositionValue(VALUE_BACK))
  btnHelmet.addEventListener('click', () => setLocationHitValue(VALUE_HELMET))
  btnPechera.addEventListener('click', () => setLocationHitValue(VALUE_PECHERA))
  btnSaveMotion.addEventListener('click', saveMotion)
  btnAcceptFoul.addEventListener('click', saveFault)
  btnPause.addEventListener('click', pauseTimer)
  btnChangeTimer.addEventListener('click', () => windowModalChangesTimer())
  modalLogic()
}

function setRoundCount() {
  roundCount++
  displayRound.textContent = roundCount
}

function setFaultCount() {
  roundFault++
  displayFault.textContent = roundFault
}

function windowModalFinishTimer(text) {
  modalTimer.style.display = 'block'
  textModal.textContent = text
  closeButtonModal.addEventListener('click', function () {
    isOnRound = true
    finishOrStartRound()
    modalTimer.style.display = 'none'
  })
  window.addEventListener('click', function (event) {
    if (event.target === modalTimer) {
      isOnRound = true
      finishOrStartRound()
      modalTimer.style.display = 'none'
    }
  })
}

function saveMotion() {
  if (hitValue !== 0 || locationHitValue !== 0) {
    console.log('guardado', realiseMotion())
    setMotionPost(realiseMotion())
    locationHitValue = 0
    hitValue = 0
    positionValue = 0
    kickedValue = 0
    pointValue = 0
    confirmPoint = false
    btnConfirmPoint.style.background = 'none'
  } else {
    alert('Por favor, seleccione un ataque')
  }
}

function realiseMotion() {
  const hit = parseInt(hitValue) || 0
  const position = parseInt(positionValue) || 0
  const locationHit = parseInt(locationHitValue) || 0
  const timerHit = parseFloat(getTimerHit)
  return ({
    golpe: hit,
    timepoGolpe: timerHit,
    posicion: position,
    ubicacionGolpe: locationHit,
    golpeoAcertado: kickedValue,
    punto: pointValue,
    round: roundCount,
  })
}

function getTimerMinute(timer) { return timer }

function setLocationHitValue(value) {
  if (hitValue !== 0) {
    locationHitValue = value
    assessHit()
    setPointValue()
    console.log(`valor de golpe en localización: ${locationHitValue}`)
  } else {
    alert('Movimiento NO valido')
  }
}

function setPositionValue(value) {
  if (hitValue !== 0) {
    positionValue = value
    console.log(`valor de posición: ${positionValue}`)
  } else {
    alert('Movimiento NO valido')
  }
}

function setHitValue(value) {
  getTimerHit = getTimerMinute(setTimerValue)
  hitValue = value
  console.log(`valor de golpe: ${hitValue} tiempo: ${getTimerHit}`)
}

// evaluates if the blow was to the helmet to score a point
function setPointValue() {
  if (locationHitValue === 1) return pointValue = 1
}

function assessHit() {
  locationHitValue === 0
    ? kickedValue = 0
    : kickedValue = 1
}

// plus button confirm point pechera
btnConfirmPoint.addEventListener('click', function () {
  confirmPoint = !confirmPoint
  if (confirmPoint) {
    pointValue = 1
    btnConfirmPoint.style.background = 'rgb(74 222 128)'
    console.log('punto dado')
  } else {
    pointValue = 0
    btnConfirmPoint.style.background = 'none'
    console.log('punto removido')
  }
})

function saveFault() {
  console.log('guardado:', catchFault())
  setFaultCount()
}

function catchFault() {
  getTimerHit = getTimerMinute(setTimerValue)
  const timerFault = parseFloat(getTimerHit)
  let selectedValue
  for (const radioButton of radioButtons) {
    if (radioButton.checked) {
      selectedValue = parseInt(radioButton.value)
      return {
        falta: selectedValue,
        tiempoFalta: timerFault,
        round: roundCount,
      }
    }
  }
}

function btnDisabled() {
  if (!isOnRound) {
    btnLeftFist.disabled = true
    btnRightFist.disabled = true
    btnLeftFoot.disabled = true
    btnRightFoot.disabled = true
    btnSpinKick.disabled = true
    btnBack.disabled = true
    btnForward.disabled = true
    btnHelmet.disabled = true
    btnPechera.disabled = true
    btnSaveMotion.disabled = true
  } else {
    btnLeftFist.disabled = false
    btnRightFist.disabled = false
    btnLeftFoot.disabled = false
    btnRightFoot.disabled = false
    btnSpinKick.disabled = false
    btnBack.disabled = false
    btnForward.disabled = false
    btnHelmet.disabled = false
    btnPechera.disabled = false
    btnSaveMotion.disabled = false
  }
}

function windowModalMessagePause(text) {
  modalMessage.style.display = 'block'
  modalText.textContent = text
  btnCloseModal.addEventListener('click', function () {
    timerSelect.start()
    modalMessage.style.display = 'none'
    btnPause.textContent = 'Pausar'
  })
}

function windowModalChangesTimer() {
  modalChangeTimer.style.display = 'block'
  closeModalTimer.addEventListener('click', function () {
    modalChangeTimer.style.display = 'none'
  })
  window.addEventListener('click', function (event) {
    if (event.target === modalChangeTimer) {
      modalChangeTimer.style.display = 'none'
    }
  })
}

function modalLogic() {
  // Recorre cada botón de alternar modal y agrega un listener de clic
  modalToggle.forEach((toggle) => {
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
      const modal = hide.closest('.h-modal') // Obtiene el elemento del modal más cercano
      modal.classList.add('hidden') // Oculta el modal al agregar la clase 'hidden'
      modal.setAttribute('aria-hidden', 'true') // Establece el atributo 'aria-hidden' en 'true' cuando el modal está oculto
      modal.setAttribute('tabindex', '-1') // Establece el atributo 'tabindex' en '-1' para que el modal no sea accesible mediante el teclado
      timerSelect.start()
    })
  })
}
