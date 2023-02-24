import { BTN_PAUSE } from './constDOM.js'
import { MODAL_MESSAGE, MODAL_CLOSE_MESSAGE, MODAL_TEXT_MESSAGE } from './constDOM.js'
import { windowModalFinishTimer } from './index.js'

export function startTimer(duration, display, setTimerValue) {
  let isTimerRunning = true
  let clearIntervalID

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
    clearIntervalID: clearIntervalID, // Return the clearIntervalID value
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
