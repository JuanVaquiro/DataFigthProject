import {
  BTN_LEFT_HIT, BTN_RIGHT_HIT, BTN_LEFT_FOOT, BTN_RIGHT_FOOT, BTN_SPIN_KICK, BTN_SAVE_MOTION,
  BTN_FOWARD, BTN_BACK,
  BTN_HELMET, BTN_PECHERA,
  DISPLAY_ROUND, BTN_CONFIRM_POINT,
  BTN_FINAL_FIGHT, BTN_START_ROUND, BTN_PAUSE, BTN_RETURN, BTN_FAULT,
  BTN_ACCEPT_FOUL,
} from './constDOM.js'
import { MODAL_TIMER_FINISH, MODAL_CLOSE_FINISH } from './constDOM.js'
import { INFO_DEPORTISTA, INF0_DELEGACION, INFO_FASE, NUM_ROUND, NUM_FAULT, BTN_SAVE_ROUND } from './constDOM.js'
import { saveMotion, setHitValue, setLocationHitValue, setPositionValue, confirmPointPechera } from './Motion.js'
import { pauseTimer } from './pausar.js'
import { windowModalGoToBack } from './goToBack.js'
import { saveFault, windosModalFault, faultCount } from './fault.js'
import { infoFight } from './fetchSet.js'
import { vid } from '../videoPlayer/player.js'

const VALUE_FOOT_LEFT = 1
const VALUE_FOOT_RIGHT = 2
const VALUE_HIT_LEFT = 3
const VALUE_HIT_RIGHT = 4
const VALUE_SPIN_KICK = 5
const VALUE_FORWARD = 1
const VALUE_BACK = 2
const VALUE_HELMET = 1
const VALUE_PECHERA = 2

let getDeportista
let getDelegacion
let fase
let numberRound = 1
let assingTimer = 30
let isOnRound = false
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
BTN_CONFIRM_POINT.disabled = true
BTN_FINAL_FIGHT.disabled = true
BTN_PAUSE.disabled = true
BTN_RETURN.disabled = true
BTN_FAULT.disabled = true

// CLICK INIT FIGHT
BTN_START_ROUND.addEventListener('click', finishOrStartRound)
BTN_START_ROUND.addEventListener('click', executeFnt())
// GET infoFight
window.addEventListener('DOMContentLoaded', () => {
  infoFight(deportista, combate)
})

export function capturarInfo(data, deporstista, delegacion) {
  getDeportista = deporstista //👈 assign to the deporstista
  getDelegacion = delegacion //👈 assign to the delegacion
  fase = data[0].ronda //👈 assign to the ronda
  numberRound = data[0].rounds //👈 assign number to the round 
  assingTimer = data[0].tiempo_round_seg //👈 assign duration to the round time
}

function finishOrStartRound() {
  isOnRound = !isOnRound
  if (isOnRound) {
    vid.play()
    BTN_START_ROUND.textContent = 'Terminar Round'
    BTN_PAUSE.textContent = 'Pausar'
    setRoundCount()
  } else {
    vid.pause()
    BTN_START_ROUND.textContent = '→ Iniciar Round ←'
    windowModalFinishRound()
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
  BTN_PAUSE.addEventListener('click', () => pauseTimer())
  BTN_RETURN.addEventListener('click', () => windowModalGoToBack())
  windosModalFault()
  BTN_FINAL_FIGHT.addEventListener('click', confirmFinishFight)
}

function setRoundCount() {
  if (roundCount < numberRound) {
    roundCount++
    DISPLAY_ROUND.textContent = roundCount
  } else {
    window.location.href = './../combate-finalizado'
  }
}

export function windowModalFinishRound() {
  INFO_DEPORTISTA.innerText = getDeportista
  INF0_DELEGACION.innerText = getDelegacion
  INFO_FASE.innerText = fase
  NUM_ROUND.innerText = roundCount
  NUM_FAULT.innerText = faultCount
  MODAL_TIMER_FINISH.style.display = 'block'
  MODAL_CLOSE_FINISH.addEventListener('click', function () {
    isOnRound = true
    finishOrStartRound()
    MODAL_TIMER_FINISH.style.display = 'none'
  })
  BTN_SAVE_ROUND.addEventListener('click', saveDateRound)
  window.addEventListener('click', function (event) {
    if (event.target === MODAL_TIMER_FINISH) {
      isOnRound = true
      finishOrStartRound()
      MODAL_TIMER_FINISH.style.display = 'none'
    }
  })
}

// BTN SAVE ROUND CONTEN MODAL Finish ROUND
function saveDateRound() {
  MODAL_TIMER_FINISH.style.display = 'none'
}

function confirmFinishFight() {
  vid.pause()
  Swal.fire({
    title: 'Estas seguro de finalizar el combate?',
    text: 'asegurarte de haber registrador todas las rounds, saldras de esta pantalla',
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Terminar!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = './../combate-finalizado'
    } else if (result.isDismissed) {
      vid.play()
    }
  })
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
    BTN_CONFIRM_POINT.disabled = true
    BTN_FINAL_FIGHT.disabled = true
    BTN_PAUSE.disabled = true
    BTN_RETURN.disabled = true
    BTN_FAULT.disabled = true
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
    BTN_CONFIRM_POINT.disabled = false
    BTN_FINAL_FIGHT.disabled = false
    BTN_PAUSE.disabled = false
    BTN_RETURN.disabled = false
    BTN_FAULT.disabled = false
  }
}
