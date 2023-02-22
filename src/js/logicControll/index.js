// hits
const btnLeftFoot = document.getElementById('patada_izquierda')
const btnRightFoot = document.getElementById('patada_derecha')
const btnLeftFist = document.getElementById('puño_izquierdo')
const btnRightFist = document.getElementById('puño_derecho')
const btnSpinKick = document.getElementById("patada_con_giro")
// position 
const btnForward = document.getElementById('delante')
const btnBack = document.getElementById('trasera')
// locationHit
const btnHelmet = document.getElementById('casco')
const btnPechera = document.getElementById('pechera')
// view modal timer finish
const modalTimer = document.getElementById("modal");
const closeButtonModal = document.getElementById("close_button_modal");
const textModal = document.getElementById("text_modal")
// view modal alert
const modalMessage = document.getElementById("modal_contiainer");
const btnCloseModal = document.getElementById("modal_close_message")
const modalText = document.getElementById("modal_meesage");
// menu
const btnStartRound = document.getElementById('iniciar_ronda')
const btnFinalRound = document.getElementById('finalizar_ronda')
const btnSaveMotion = document.getElementById('guardar_movimiento')
// info figtht
const displayTimer = document.getElementById('tiempo')
const displayRound = document.getElementById('round')
const btnConfirmPoint = document.getElementById('confirmar_punto')

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
let roundCount = 0
let minutes = 60 * 3
let clearTimer = 0
let setTimer = 0
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

btnStartRound.addEventListener('click', finishOrStartRound)
btnStartRound.addEventListener('click', executeFnt())

function finishOrStartRound() {
  isOnRound = !isOnRound
  if (isOnRound) {
    btnStartRound.textContent = "Terminar Round --"
    startTimer(minutes, displayTimer)
    setRoundCount()
  } else {
    btnStartRound.textContent = "Iniciar Round ++"
    clearInterval(clearTimer)
  }
  btnDisabled()
}

function startTimer(duration, display) {
  let minutes
  let seconds
  clearTimer = setInterval(function () {
    minutes = parseInt(duration / 60, 10)
    seconds = parseInt(duration % 60, 10)
    minutes = minutes < 10 ? "0" + minutes : minutes
    seconds = seconds < 10 ? "0" + seconds : seconds
    display.textContent = `${minutes}:${seconds}`
    setTimer = `${minutes}.${seconds}`
    if (--duration < 0) {
      clearInterval(clearTimer)
      windowModalFinishTimer('La ronda a finalizado: tiempo agotado.')
    }
  }, 1000)
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
}

function setRoundCount() {
  roundCount++
  displayRound.textContent = roundCount
}

function windowModalFinishTimer(text) {
  modalTimer.style.display = "block"
  textModal.textContent = text
  closeButtonModal.addEventListener("click", function () {
    isOnRound = true
    finishOrStartRound()
    modalTimer.style.display = "none"
  })
  window.addEventListener("click", function (event) {
    if (event.target === modalTimer) {
      isOnRound = true
      finishOrStartRound()
      modalTimer.style.display = "none"
    }
  })
}

function windowModalMessage(text) {
  modalMessage.style.display = "block"
  modalText.textContent = text
  btnCloseModal.addEventListener("click", function () {
    modalMessage.style.display = "none"
  })
  window.addEventListener("click", function (event) {
    if (event.target === modalMessage) {
      modalMessage.style.display = "none"
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
    windowModalMessage('Por favor, seleccione un ataque')
  }
}

function realiseMotion() {
  const hit = parseInt(hitValue) || 0
  const position = parseInt(positionValue) || 0
  const locationHit = parseInt(locationHitValue) || 0
  const timerHit = parseFloat(getTimerHit)
  return ({
    golpe: hit,
    posicion: position,
    ubicacionGolpe: locationHit,
    golpeoAcertado: kickedValue,
    punto: pointValue,
    round: roundCount,
    timepoGolpe: timerHit,
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
  getTimerHit = getTimerMinute(setTimer)
  hitValue = value
  console.log(`valor de golpe: ${hitValue} tiempo: ${getTimerHit}`)
}

// evaluates if the blow was to the helmet to score a point
function setPointValue() {
  if (locationHitValue === 1) {
    pointValue = 1
  }
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
    // btnConfirmPoint.style.foc
    console.log('punto removido')
  }
})

function assessHit() {
  if (locationHitValue === 0) {
    kickedValue = 0
  } else {
    kickedValue = 1
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

function setMotionPost(motions) {
  try {
    let formdata = new FormData()
    formdata.append('golpe', motions.golpe)
    formdata.append('posicion', motions.posicion)
    formdata.append('ubicacion', motions.ubicacionGolpe)
    formdata.append('golpeo', motions.golpeoAcertado)
    formdata.append('punto', motions.punto)
    formdata.append('round', motions.round)
    formdata.append('segundo', motions.timepoGolpe)

    fetch('./../app/combate/RegistroAtaquesCombate.php', {
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