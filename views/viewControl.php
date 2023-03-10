<section class="bg-slate-900 source-sans-pro">
  <div class="flex justify-around items-center h-80 sm:h-[21rem] md:h-[342px]">
    <!-- acierto del golpe -->
    <div class="btns-group1 grid grid-cols-2 gap-3">
      <button type="button" id="casco" class="h-20 w-28 focus:outline-none border border-gray-500 text-white bg-yellow-700 hover:bg-yellow-500 hover:border-gray-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 sm:p-0 sm:h-16 sm:w-24">
        Casco
      </button>
      <button type="button" id="delante" class="h-20 w-28 focus:outline-none border border-gray-500 text-white bg-yellow-900 hover:bg-yellow-500 hover:border-gray-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 sm:p-0 sm:h-16 sm:w-24">
        Delantera
      </button>
      <div>
        <button id="confirmar_punto" class="z-50 fixed border-2 border-green-700 font-medium rounded-bl-2xl rounded-b-2xl  text-sm px-1 py-2 text-center mr-2 mb-1  text-white hover:bg-green-500">
          +
        </button>
        <button type="button" id="pechera" class="h-20 w-28 focus:outline-none border border-gray-500 text-white bg-yellow-700 hover:bg-yellow-500 hover:border-gray-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 sm:p-0 sm:h-16 sm:w-24">
          Pechera
        </button>
      </div>
      <button type="button" id="trasera" class="h-20 w-28 focus:outline-none border border-gray-500 text-white bg-yellow-900 hover:bg-yellow-500 hover:border-gray-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 sm:p-0 sm:h-16 sm:w-24">
        Trasera
      </button>
      <button type="button" id="guardar_movimiento" class="focus:outline-none border border-gray-500 text-white bg-green-800 hover:bg-green-700 focus:ring-4 focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 sm:h-16 sm:w-22 sm:p-0">
        GUARDAR
      </button>
    </div>
    <!-- Menu -->
    <article class="flex flex-col justify-center gap-2 text-white bg-slate-800 shadow-lg border border-slate-500/30 rounded-tl p-2 h-80 ring-1 ring-white/10 ring-inset sm:h-[21rem] md:h-[342px]">
      <button type="button" id="finalizar_combate" class="p-4 sm:p-2 sm:my-1 md:my-2">Finalizar Combate</button>
      <button type="button" id="iniciar_ronda" class="p-4 sm:p-2 sm:my-1 md:my-2">INICIAR</button>
      <button type="button" id="pausar" class="p-4 sm:p-2 sm:my-1 md:my-2">Pausar</button>
      <button type="button" id="regresar" class="p-4 sm:p-2 sm:my-1 md:my-2">Regresar</button>
    <!-- Modal toggle --> 
      <button id="falta" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="p-4 sm:p-2" type="button">
        Falta
      </button>
    </article>
    <!-- Gulpes -->
    <div class="grid grid-cols-2 gap-3">
      <button type="button" id="patada_derecha" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-red-700 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 sm:h-16 sm:w-24 sm:p-0">
        Patada derecha
      </button>
      <button type="button" id="puño_derecho" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-red-900 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 sm:h-16 sm:w-24 sm:p-0">
        Puño derecho
      </button>
      <button type="button" id="patada_izquierda" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-red-700 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 sm:h-16 sm:w-24 sm:p-0">
        Patada izquierda
      </button>
      <button type="button" id="puño_izquierdo" class="h-20 w-28 border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-red-900 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 sm:h-16 sm:w-24 sm:p-0">
        Puño izquierdo
      </button>
      <button type="button" id="patada_con_giro" class="focus:outline-none border border-gray-500 text-white bg-red-500 hover:bg-red-300 hover:border-gray-600  focus:ring-4 focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 sm:h-16 sm:w-22 sm:p-0">
        Patada con giro
      </button>
    </div>
  </div>
  <!-- informacion -->
  <article class="flex justify-between bg-slate-400 sm:p-[11px] md:p-2">
    <dl class="flex flex-col mx-3 p-2 w-5/12 md:w-1/2 sm:px-2 sm:w-full sm:m-0 sm:p-0">
      <dt class="" id="deportista">nombre No econtrado</dt>
      <dd class="" id="delegacion">delegacion No econtrado</dd>
    </dl>
    <div class="flex">
    <dl class="flex flex-col items-center mx-3 p-2 sm:p-0">
      <dt class="">Fase</dt>
      <dd class="" id="fase">NAN</dd>
    </dl>
    <dl class="flex flex-col items-center mx-3 p-2 sm:p-0">
      <dt class="">Round</dt>
      <dd id="round" class="py-1 px-4 rounded-lg shadow-md shadow-slate-800 text-white bg-slate-600">0</dd>
    </dl>
    <dl class="flex flex-col items-center mx-3 p-2 sm:p-0">
      <dt class="">Faltas</dt>
      <dd id="contador_faltas" class="py-1 px-4 rounded-lg shadow-md shadow-slate-800 text-white bg-slate-600">0</dd>
    </dl>
    <dl class="flex flex-col items-center mx-3 p-2 sm:p-0">
      <div class="flex gap-1 items-center">
        <dt>Tiempo</dt>
        <button id="cambiar_tiempo" type="button">
          <svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="matrix(-1 0 0 1 19 2)"><circle cx="8.5" cy="8.5" r="8"/><path d="m8.5 5.5v4h-3.5"/></g></svg>
        </button>
      </div>
        <dd id="tiempo" class="py-1 px-4 rounded-lg shadow-md shadow-slate-800  text-white bg-slate-600">00:00</dd>
    </dl>
  </article>
</section>
<!-- modal tiempo terminado -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <h3 class="text-xl font-semibold text-white">
        Final Round
      </h3>
      <button id="close_button_modal" type="button" class="text-gray-400 bg-red-600 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
      <p id="text_modal"></p>
    </div>
  </div>
      <!-- modal pausar -->
  <div id="modal_contiainer" class="modal">
    <div class="modal-content">
      <p id="modal_meesage" class="text-xl font-semibold text-white"></p>
      <button id="modal_close_message" class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" >Reanudar</button>
    </div>
  </div>
 <!-- modal cambiar tiempo -->
<div id="modal_cambiar_tiempo" class="modal">
 <!-- Modal content tiempo -->
  <div class="modal-content">
    <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <!-- Modal header tiempo -->
      <h3 class="text-xl text-center font-semibold text-white">
        Calibrar tiempo
      </h3>
      <button id="cerrar_modal" type="button" class="text-gray-400 bg-red-600 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div class="flex flex-col items-center gap-3 p-2 ">
      <div class="flex gap-5">
        <div class="flex flex-col items-center gap-1">
          <label for="minutes-input">MinutoMax: 5</label>
          <input type="number" id="minutes-input" class="text-black w-4/12" value="0" min="1" max="5">
        </div>
        <div class="flex flex-col items-center gap-1">
          <label for="seconds-input">SegundoMax: 59</label>
          <input type="number" id="seconds-input" class="text-black w-4/12" value="0" min="1" max="59">
        </div>
      </div>
      <button id="guardar_tiempo" class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Guardar
      </button>
    </div>
  </div>
</div>
 <!-- Main modal Faltas -->
 <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full sm:w-11/12 sm:h-5/6  ">
          <div class="relative ml-20 w-full h-full max-w-2xl md:h-auto lg:ml-80 2xl:ml-96 sm:w-10/12 sm:h-4/6">
              <!-- Modal content -->
              <div class="relative rounded-lg shadow bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                      <h3 class="text-xl font-semibold text-white">
                          Seleccione una falta
                      </h3>
                      <button type="button" class="text-gray-400 bg-red-600 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-hide="defaultModal">
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
  <script>

    let combate = <?= $_GET['combate'] ?>;
    let deportista = <?= $_GET['deportista'] ?>;
  
</script>
<script src="./../../src/js/logicControl/index.js" type="module"></script>