import { BTN_PAUSE } from './constDOM.js'
import { MODAL_MESSAGE, MODAL_CLOSE_MESSAGE, MODAL_TEXT_MESSAGE } from './constDOM.js'
import { vid } from '../videoPlayer/player.js'

export function pauseTimer() {
  BTN_PAUSE.addEventListener('click', vid.pause())
  windowModalMessagePause('Combate pausado')
  BTN_PAUSE.textContent = 'Tiempo-pausado'
}

function windowModalMessagePause(text) {
  MODAL_MESSAGE.style.display = 'block'
  MODAL_TEXT_MESSAGE.textContent = text
  MODAL_CLOSE_MESSAGE.addEventListener('click', function () {
    vid.play()
    MODAL_MESSAGE.style.display = 'none'
    BTN_PAUSE.textContent = 'Pausar'
  })
}
