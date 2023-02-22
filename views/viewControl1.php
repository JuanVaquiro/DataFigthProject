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
        <button type="button" id="pechera" class="h-20 w-28 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
        >Pechera
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
      <button type="button" id="finalizar_ronda" class="p-4">Finalizar Combate</button>
      <button type="button" id="iniciar_ronda" class="p-4">Iniciar Ronda</button>
      <button type="button" class="p-4">Regresar</button>
      <button type="button" class="p-4">Falta</button>
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

      <div id="modal" class="modal">
      <div class="modal-content">
        <button id="close_button_modal" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-500 font-medium rounded-lg text-sm px-2  ml-80" type="button">
        &times; 
        </button>
        <p id="text_modal"></p>
      </div>
      </div>

      <div id="modal_contiainer" class="modal">
      <div class="modal-content">
        <button id="modal_close_message" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-500 font-medium rounded-lg text-sm px-2  ml-80" type="button">
        &times; 
        </button>
        <p id="modal_meesage"></p>
      </div>
      </div>

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
        <span class="">0</span>
      </div>
      <div class="flex flex-col items-center mx-3 p-2">
        <span class>Tiempo</span>
        <span id="tiempo" class="">00:00</span>
      </div>
    </div>
  </article>
</section>
<script type="module" src="../src/js/logicControll/index.js"></script>