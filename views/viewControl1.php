<section>
  <div class="flex justify-around items-center h-80">
    <!-- acierto del golpe -->
    <div class="btns-group1 grid grid-cols-2 gap-3">
      <button type="button" id="casco" class="h-20 w-28 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
        Casco
      </button>
      <button type="button" id="delante" class="h-20 w-28 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
        Delante
      </button>
      <div>
        <button id="confirmar_punto" class="z-50 fixed border-2  font-medium rounded-bl-2xl rounded-b-2xl  text-sm px-1 py-2 text-center mr-2 mb-1 border-green-600 text-white hover:bg-green-500">
          +
        </button>
        <button type="button" id="pechera" class="h-20 w-28 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
          Pechera
        </button>
      </div>
      <button type="button" id="trasera" class="h-20 w-28 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
        Trasera
      </button>
      <button type="button" id="guardar_movimiento" class="div1 focus:outline-none text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
        GUARDAR
      </button>
    </div>
    <!-- Menu -->
    <article class="flex flex-col justify-center gap-2 bg-slate-400 p-2 h-80">
      <button type="button" id="finalizar_combate" class="p-4">Finalizar Combate</button>
      <button type="button" id="iniciar_ronda" class="p-4">Iniciar Ronda</button>
      <button type="button" id="pausar" class="p-4">Pausar</button>
      <button type="button" id="regresar" class="p-4">Regresar</button>
    <!-- Modal toggle --> 
      <button id="falta" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="p-4" type="button">
        Falta
      </button>
    </article>
    <!-- Gulpes -->
    <div class="grid grid-cols-2 gap-3">
      <button type="button" id="puño_izquierdo" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700">
        Puño izquierdo
      </button>
      <button type="button" id="puño_derecho" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700">
        Puño derecho
      </button>
      <button type="button" id="patada_izquierda" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700"
      >Patada izquierda
    </button>
      <button type="button" id="patada_derecha" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700">
        Patada derecha
      </button>
      <button type="button" id="patada_con_giro" class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700">
        Patada con giro
      </button>
    </div>
  </div>
  <!-- informacion -->
  <article class="flex justify-between bg-sky-300">
    <div class="flex flex-col  mx-3 p-2 w-5/12 md:w-1/2">
      <span class="">Andrea Camila Ramirez</span>
      <span class="">Liga Boyaca</span>
    </div>
    <div class="flex">
    <div class="flex flex-col items-center mx-3 p-2">
        <span class="">Fase</span>
        <span class="">semifinal</span>
      </div>
      <div class="flex flex-col items-center mx-3 p-2">
        <span class="">Round</span>
        <span id="round" class="">0</span>
      </div>
      <div class="flex flex-col items-center mx-3 p-2">
        <span class="">Faltas</span>
        <span id="contador_faltas" class="">0</span>
      </div>
      <div class="flex flex-col items-center mx-3 p-2">
        <div class="flex gap-1 items-center">
          <span>Tiempo</span>
          <button id="cambiar_tiempo" type="button">
            <svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="matrix(-1 0 0 1 19 2)"><circle cx="8.5" cy="8.5" r="8"/><path d="m8.5 5.5v4h-3.5"/></g></svg>
          </button>
        </div>
        <span id="tiempo" class="">00:00</span>
      </div>
    </div>
  </article>
</section>
<!-- modal tiempo terminado -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <h3 class="source-sans-pro text-xl font-semibold text-white">
        Final Round
      </h3>
      <button id="close_button_modal" type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
      <p id="text_modal"></p>
    </div>
  </div>
      <!-- modal pausar -->
  <div id="modal_contiainer" class="modal">
    <div class="modal-content">
      <p id="modal_meesage" class="source-sans-pro text-xl font-semibold text-white"></p>
      <button id="modal_close_message" class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" >Reanudar</button>
    </div>
  </div>
 <!-- modal cambiar tiempo -->
<div id="modal_cambiar_tiempo" class="modal">
 <!-- Modal content tiempo -->
  <div class="modal-content">
    <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <!-- Modal header tiempo -->
      <h3 class="source-sans-pro text-xl font-semibold text-white">
        Cambiar tiempo
      </h3>
      <button id="cerrar_modal" type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div class="flex flex-col items-center gap-3 p-2 ">
      <div class="flex gap-2">
        <label for="minutes-input">Minuto:</label>
        <input type="number" id="minutes-input" class="text-black" value="0" min="0" max="59">
        <label for="seconds-input">Segundo:</label>
        <input type="number" id="seconds-input" class="text-black" value="0" min="0" max="59">
      </div>
      <button id="guardar_tiempo" class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Guardar
      </button>
    </div>
  </div>
</div>
 <!-- Main modal Faltas -->
 <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
          <div class="relative ml-20 w-full h-full max-w-2xl md:h-auto lg:ml-80 2xl:ml-96">
              <!-- Modal content -->
              <div class="relative rounded-lg shadow bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                      <h3 class="source-sans-pro text-xl font-semibold text-white">
                          Seleccione una falta
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-hide="defaultModal">
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 grid gap-2 md:grid-cols-2">
                    <div class="flex items-center pl-4 border rounded border-gray-500">
                        <input id="bordered_radio_1" type="radio" value="1" name="bordered_radio" class="w-4 h-4 text-blue-600ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                        <label for="bordered_radio_1" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
                          Agarre
                        </label>
                    </div>
                    <div class="flex items-center pl-4 border rounded border-gray-500">
                        <input id="bordered_radio_2" type="radio" value="2" name="bordered_radio" class="w-4 h-4 text-blue-600  ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                        <label for="bordered_radio_2" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
                          Empujar
                        </label>
                    </div>
                    <div class="flex items-center pl-4 border rounded border-gray-500">
                        <input id="bordered_radio_3" type="radio" value="3" name="bordered_radio" class="w-4 h-4 text-blue-600ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                        <label for="bordered_radio_3" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
                          Salirse del area
                        </label>
                    </div>
                    <div class="flex items-center pl-4 border rounded border-gray-500">
                        <input id="bordered_radio_4" type="radio" value="4" name="bordered_radio" class="w-4 h-4 text-blue-600  ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                        <label for="bordered_radio_4" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
                          Ataque al caido
                        </label>
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-2 border-t  rounded-b ">
                      <button id="boton_aceptar_falta" data-modal-hide="defaultModal" type="button" class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        Aceptar
                      </button>
                      <button data-modal-hide="defaultModal" type="button" class="focus:ring-4 focus:outline-none rounded-lg border  text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">
                        Cancelar
                  </button>
              </div>
          </div>
      </div>
  </div>
<script type="module" src="../src/js/logicControll/index.js"></script>