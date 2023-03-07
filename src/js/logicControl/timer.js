import { BTN_PAUSE, DISPLAY_TIMER } from './constDOM.js'
import { MODAL_MESSAGE, MODAL_CLOSE_MESSAGE, MODAL_TEXT_MESSAGE } from './constDOM.js'
import { MODAL_TIMER_CHANGE, MODAL_CLOSE_CHANGE, MODAL_MINUTES_INPUT_CHANGE, MODAL_SECONDS_INPUT_CHANGE, MODAL_SAVE_TIME_CHANGE } from './constDOM.js'
import { windowModalFinishTimer } from './index.js'

export function startTimer(duration, display) {
  let isTimerRunning = true
  let clearIntervalID

  const formatTime = (time) => (time < 10 ? `0${time}` : time)

  const setTimer = () => {
    if (!isTimerRunning) return
    let minutes = parseInt(duration / 60, 10)
    let seconds = parseInt(duration % 60, 10)
    minutes = formatTime(minutes)
    seconds = formatTime(seconds)

    display.textContent = `${minutes}:${seconds}`

    if (--duration < 0) {
      clearInterval(clearIntervalID)
      windowModalFinishTimer('tiempo agotado.')
    }
  }

  clearIntervalID = setInterval(setTimer, 1000) // 👈 speed timer delay in the Interval:
  // ⏲ milliseconds: 0.75 = 1600, 0.50 = 2000, 0.25 = 4000

  const stopTimer = () => {
    isTimerRunning = false
  }
  const startRunTimer = () => {
    isTimerRunning = true
  }
  const getTime = () => {
    let minutes = parseInt(duration / 60, 10)
    let seconds = parseInt(duration % 60, 10)
    minutes = formatTime(minutes)
    seconds = formatTime(seconds)
    return `${minutes}.${seconds}`
  }
  return {
    stop: stopTimer,
    start: startRunTimer,
    getTime: getTime,
    clearIntervalID: clearIntervalID,
  }
}

export function pauseTimer(timerSelect) {
  timerSelect.stop()
  windowModalMessagePause('Combate pausado', timerSelect)
  BTN_PAUSE.textContent = 'Tiempo-pausado'
}

function windowModalMessagePause(text, timerSelect) {
  MODAL_MESSAGE.style.display = 'block'
  MODAL_TEXT_MESSAGE.textContent = text
  MODAL_CLOSE_MESSAGE.addEventListener('click', function () {
    timerSelect.start()
    MODAL_MESSAGE.style.display = 'none'
    BTN_PAUSE.textContent = 'Pausar'
  })
}

export function windowModalChangesTimer(timerSelect) {
  MODAL_TIMER_CHANGE.style.display = 'block'
  MODAL_CLOSE_CHANGE.addEventListener('click', function () {
    MODAL_TIMER_CHANGE.style.display = 'none'
  })

  window.addEventListener('click', function (event) {
    if (event.target === MODAL_TIMER_CHANGE) {
      MODAL_TIMER_CHANGE.style.display = 'none'
    }
  })

  MODAL_SAVE_TIME_CHANGE.addEventListener('click', function () {
    let newMinutes = parseInt(MODAL_MINUTES_INPUT_CHANGE.value)
    let newSeconds = parseInt(MODAL_SECONDS_INPUT_CHANGE.value)
    if (newMinutes === 0 && newSeconds === 0) {
      alert('Por favor ingrese un valor mayor a "0" en alguno de los dos campos')
    } else if (newMinutes <= 5 && newSeconds <= 59) {
      let newDuration = newMinutes * 60 + newSeconds
      clearInterval(timerSelect.clearIntervalID)
      timerSelect = startTimer(newDuration, DISPLAY_TIMER)
      MODAL_TIMER_CHANGE.style.display = 'none'
    } else {
      alert('Por favor ingrese un valor en minutos max=5 y en segundos max=59')
    }
  })
}