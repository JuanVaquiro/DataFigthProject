import { BTN_CONFIRM_POINT, INPUT_TIMER } from './constDOM.js'
import { setMotionPost } from './fetchsData.js'
import { roundCount } from "./index.js"

let getTimerHit = 0
let hitValue = 0
let positionValue = 0
let locationHitValue = 0
let pointValue = 0
let confirmPoint = false
let kickedValue = 0

export function saveMotion() {
  if (
    locationHitValue !== 0 ||
    (hitValue !== 0 && positionValue !== 0) 
  ) {
    console.log(getTimerHit)
    console.log('guardado', realiseMotion())
    setMotionPost(realiseMotion())
    locationHitValue = 0
    hitValue = 0
    positionValue = 0
    kickedValue = 0
    pointValue = 0
    confirmPoint = false
    getTimerHit = 0
    INPUT_TIMER.value = "0.00"
    BTN_CONFIRM_POINT.style.background = 'none'
  } else {
    Swal.fire({
      toast: true,
      title: 'Por favor, seleccione un golpe y su posicion',
      icon: 'warning',
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    })
  }
}

function realiseMotion() {
  const hit = parseInt(hitValue) || 0
  const position = parseInt(positionValue) || 0
  const locationHit = parseInt(locationHitValue) || 0
  getTimerHit = parseFloat(INPUT_TIMER.value)//👈 captur value input timer
  console.log(getTimerHit)
  return ({
    golpe: hit,
    timepoGolpe: getTimerHit,
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
    Swal.fire({
      toast: true,
      title: 'No valido, igresar primero el tipo de golpe',
      icon: 'error',
      position: 'top-end',
      showConfirmButton: false,
      timer: 1500
    })
  }
}

export function setPositionValue(value) {
  if (hitValue !== 0) {
    positionValue = value
    console.log(`valor de posición: ${positionValue}`)
  } else {
    Swal.fire({
      toast: true,
      title: 'No valido, igresar primero el tipo de golpe',
      icon: 'error',
      position: 'top-end',
      showConfirmButton: false,
      timer: 1500
    })
  }
}

export function setHitValue(value) {
  hitValue = value
  console.log(`valor de golpe: ${hitValue}`)
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