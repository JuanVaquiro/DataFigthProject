import {
  BTN_LEFT_HIT, BTN_RIGHT_HIT, BTN_LEFT_FOOT,BTN_RIGHT_FOOT, BTN_SPIN_KICK,
  BTN_FOWARD, BTN_BACK,
  BTN_HELMET, BTN_PECHERA, BTN_CONFIRM_POINT,
  DISPLAY_TIMER, DISPLAY_FAULT, DISPLAY_ROUND,
  BTN_CHANGE_TIMER,
  BTN_START_ROUND, BTN_PAUSE, BTN_SAVE_MOTION, BTN_ACCEPT_FOUL,
  RADIO_BTN 
} from './constDOM.js'
import { MODAL_TIMER_CHANGE, MODAL_CLOSE_CHANGE, MODAL_TOGGLE_FAULT } from './constDOM.js'
import { MODAL_MESSAGE, MODAL_CLOSE_MESSAGE, MODAL_TEXT_MESSAGE } from './constDOM.js'
import { MODAL_TIMER_FINISH, MODAL_CLOSE_FINISH, MODAL_TEXT_FINISH } from './constDOM.js'
import { setMotionPost } from './fetchsData.js'

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

BTN_LEFT_HIT.disabled = true
BTN_RIGHT_HIT.disabled = true
BTN_LEFT_FOOT.disabled = true
BTN_RIGHT_FOOT.disabled = true
BTN_SPIN_KICK.disabled = true
BTN_FOWARD.disabled = true
BTN_BACK.disabled = true
BTN_HELMET.disabled = true
BTN_PECHERA.disabled = true
BTN_SAVE_MOTION.disabled = true

// init click
BTN_START_ROUND.addEventListener('click', finishOrStartRound)
BTN_START_ROUND.addEventListener('click', executeFnt())

function finishOrStartRound() {
  isOnRound = !isOnRound
  if (isOnRound) {
    BTN_START_ROUND.textContent = 'Terminar Round --'
    isOnTimer = false
    BTN_PAUSE.textContent = 'Pausar'
    timerSelect = startTimer(minutes, DISPLAY_TIMER)
    setRoundCount()
  } else {
    BTN_START_ROUND.textContent = 'Iniciar Round ++'
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
      windowModalFinishTimer('tiempo agotado.')
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
  BTN_PAUSE.textContent = 'Tiempo-pausado'
}

function executeFnt() {
  BTN_LEFT_FOOT.addEventListener('click', () => setHitValue(VALUE_FOOT_LEFT))
  BTN_RIGHT_FOOT.addEventListener('click', () => setHitValue(VALUE_FOOT_RIGHT))
  BTN_LEFT_HIT.addEventListener('click', () => setHitValue(VALUE_HIT_LEFT))
  BTN_RIGHT_HIT.addEventListener('click', () => setHitValue(VALUE_HIT_RIGHT))
  BTN_SPIN_KICK.addEventListener('click', () => setHitValue(VALUE_SPIN_KICK))
  BTN_FOWARD.addEventListener('click', () => setPositionValue(VALUE_FORWARD))
  BTN_BACK.addEventListener('click', () => setPositionValue(VALUE_BACK))
  BTN_HELMET.addEventListener('click', () => setLocationHitValue(VALUE_HELMET))
  BTN_PECHERA.addEventListener('click', () => setLocationHitValue(VALUE_PECHERA))
  BTN_SAVE_MOTION.addEventListener('click', saveMotion)
  BTN_ACCEPT_FOUL.addEventListener('click', saveFault)
  BTN_PAUSE.addEventListener('click', pauseTimer)
  BTN_CHANGE_TIMER.addEventListener('click', () => windowModalChangesTimer())
  modalLogic()
}

function setRoundCount() {
  roundCount++
  DISPLAY_ROUND.textContent = roundCount
}

function setFaultCount() {
  roundFault++
  DISPLAY_FAULT.textContent = roundFault
}

function windowModalFinishTimer(text) {
  MODAL_TIMER_FINISH.style.display = 'block'
  MODAL_TEXT_FINISH.textContent = text
  MODAL_CLOSE_FINISH.addEventListener('click', function () {
    isOnRound = true
    finishOrStartRound()
    MODAL_TIMER_FINISH.style.display = 'none'
  })
  window.addEventListener('click', function (event) {
    if (event.target === MODAL_TIMER_FINISH) {
      isOnRound = true
      finishOrStartRound()
      MODAL_TIMER_FINISH.style.display = 'none'
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
    BTN_CONFIRM_POINT.style.background = 'none'
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
BTN_CONFIRM_POINT.addEventListener('click', function () {
  confirmPoint = !confirmPoint
  if (confirmPoint) {
    pointValue = 1
    BTN_CONFIRM_POINT.style.background = 'rgb(74 222 128)'
    console.log('punto dado')
  } else {
    pointValue = 0
    BTN_CONFIRM_POINT.style.background = 'none'
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
  for (const radioButton of RADIO_BTN ) {
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
    BTN_LEFT_HIT.disabled = true
    BTN_RIGHT_HIT.disabled = true
    BTN_LEFT_FOOT.disabled = true
    BTN_RIGHT_FOOT.disabled = true
    BTN_SPIN_KICK.disabled = true
    BTN_FOWARD.disabled = true
    BTN_BACK.disabled = true
    BTN_HELMET.disabled = true
    BTN_PECHERA.disabled = true
    BTN_SAVE_MOTION.disabled = true
  } else {
    BTN_LEFT_HIT.disabled = false
    BTN_RIGHT_HIT.disabled = false
    BTN_LEFT_FOOT.disabled = false
    BTN_RIGHT_FOOT.disabled = false
    BTN_SPIN_KICK.disabled = false
    BTN_FOWARD.disabled = false
    BTN_BACK.disabled = false
    BTN_HELMET.disabled = false
    BTN_PECHERA.disabled = false
    BTN_SAVE_MOTION.disabled = false
  }
}

function windowModalMessagePause(text) {
  MODAL_MESSAGE.style.display = 'block'
  MODAL_TEXT_MESSAGE.textContent = text
  MODAL_CLOSE_MESSAGE.addEventListener('click', function () {
    timerSelect.start()
    MODAL_MESSAGE.style.display = 'none'
    BTN_PAUSE.textContent = 'Pausar'
  })
}

function windowModalChangesTimer() {
  MODAL_TIMER_CHANGE.style.display = 'block'
  MODAL_CLOSE_CHANGE.addEventListener('click', function () {
    MODAL_TIMER_CHANGE.style.display = 'none'
  })
  window.addEventListener('click', function (event) {
    if (event.target === MODAL_TIMER_CHANGE) {
      MODAL_TIMER_CHANGE.style.display = 'none'
    }
  })
}

function modalLogic() {
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
      const modal = hide.closest('.h-modal') // Obtiene el elemento del modal más cercano
      modal.classList.add('hidden') // Oculta el modal al agregar la clase 'hidden'
      modal.setAttribute('aria-hidden', 'true') // Establece el atributo 'aria-hidden' en 'true' cuando el modal está oculto
      modal.setAttribute('tabindex', '-1') // Establece el atributo 'tabindex' en '-1' para que el modal no sea accesible mediante el teclado
      timerSelect.start()
    })
  })
}
