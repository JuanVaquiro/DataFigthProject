const BTN_INIT_SELECT = document.getElementById('iniciar_combate_select')
const MODAL_SELECT_PLAYER = document.getElementById('modal_seleccionar_deportista')
const MODAL_CLOSE_SELECT = document.getElementById('cerrar_modal_seleccionar')
const MODAL_SELECT_DEPOR_1 = document.getElementById('deportista_1')
const MODAL_SELECT_DEPOR_2 = document.getElementById('deportista_2')

BTN_INIT_SELECT.addEventListener('click', windowModalChangesTimer)

function windowModalChangesTimer() {
  MODAL_SELECT_PLAYER.style.display = 'block'
  MODAL_CLOSE_SELECT.addEventListener('click', function () {
    MODAL_SELECT_PLAYER.style.display = 'none'
  })

  window.addEventListener('click', function (event) {
    if (event.target === MODAL_SELECT_PLAYER) {
      MODAL_SELECT_PLAYER.style.display = 'none'
    }
  })
}
