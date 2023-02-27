import {
  BTN_LEFT_HIT, BTN_RIGHT_HIT, BTN_LEFT_FOOT, BTN_RIGHT_FOOT, BTN_SPIN_KICK,
  BTN_FOWARD, BTN_BACK,
  BTN_HELMET, BTN_PECHERA,
  DISPLAY_TIMER, DISPLAY_ROUND, BTN_CONFIRM_POINT,
  BTN_START_ROUND, BTN_PAUSE, BTN_SAVE_MOTION, BTN_ACCEPT_FOUL,
  BTN_CHANGE_TIMER,
} from './constDOM.js'
import { MODAL_TIMER_FINISH, MODAL_CLOSE_FINISH, MODAL_TEXT_FINISH } from './constDOM.js'
import { MODAL_TIMER_CHANGE, MODAL_CLOSE_CHANGE } from './constDOM.js'
import { saveMotion, setHitValue, setLocationHitValue, setPositionValue, confirmPointPechera } from './Motion.js'
import { startTimer, pauseTimer } from './timer.js'
import { saveFault, windosModalFault } from './fault.js'

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
let minutes = 60 * 0.4 // 👈 assign duration to the round time
export let timerSelect
export let roundCount = 0

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

// CLICK INIT FIGHT
BTN_START_ROUND.addEventListener('click', finishOrStartRound)
BTN_START_ROUND.addEventListener('click', executeFnt())

function finishOrStartRound() {
  isOnRound = !isOnRound
  if (isOnRound) {
    BTN_START_ROUND.textContent = 'Terminar Round --'
    BTN_PAUSE.textContent = 'Pausar'
    timerSelect = startTimer(minutes, DISPLAY_TIMER)
    setRoundCount()
  } else {
    BTN_START_ROUND.textContent = 'Iniciar Round ++'
    clearInterval(timerSelect.clearIntervalID); // Clear the interval using clearIntervalID value
  }
  btnDisabled()
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
  BTN_CONFIRM_POINT.addEventListener('click', confirmPointPechera)
  BTN_SAVE_MOTION.addEventListener('click', saveMotion)
  BTN_ACCEPT_FOUL.addEventListener('click', saveFault)
  BTN_PAUSE.addEventListener('click', () => pauseTimer(timerSelect))
  BTN_CHANGE_TIMER.addEventListener('click', () => windowModalChangesTimer())
  windosModalFault()
}

function setRoundCount() {
  roundCount++
  DISPLAY_ROUND.textContent = roundCount
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

export function windowModalFinishTimer(text) {
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

