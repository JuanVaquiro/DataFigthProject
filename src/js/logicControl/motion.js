import { BTN_CONFIRM_POINT } from './constDOM.js'
import { setMotionPost } from './fetchsData.js'
import { timerSelect, roundCount } from "./index.js"

let getTimerHit = 0
let hitValue = 0
let positionValue = 0
let locationHitValue = 0
let pointValue = 0
let confirmPoint = false
let kickedValue = 0

export function saveMotion() {
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

export function setLocationHitValue(value) {
  if (hitValue !== 0) {
    locationHitValue = value
    assessHit()
    setPointValue()
    console.log(`valor de golpe en localización: ${locationHitValue}`)
  } else {
    alert('Movimiento NO valido')
  }
}

export function setPositionValue(value) {
  if (hitValue !== 0) {
    positionValue = value
    console.log(`valor de posición: ${positionValue}`)
  } else {
    alert('Movimiento NO valido')
  }
}

export function setHitValue(value) {
  getTimerHit = timerSelect.getTime()
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

export function confirmPointPechera() {
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
}