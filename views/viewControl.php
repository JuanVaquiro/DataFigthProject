<header>
<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-slate-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="./../home" class="flex items-center">
      <img src="./../../dist/img/analytics.png" class="h-6 mr-3 sm:h-9" alt="DataFight Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">DataFight</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" id="iniciar_ronda" id="finalizar_combate" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        INICIAR
      </button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    <li>
        <button type="button" id="finalizar_combate" class="block text-xl py-1 px-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 dark:text-white">
        Finalizar Combate
        </button>
      </li>
    <li>
        <button type="button" id="falta" data-modal-target="defaultModal" data-modal-toggle="defaultModal" 
        class="block text-xl py-1 px-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
          Falta
        </button>
      </li>
      <li>
        <button type="button" id="regresar" class="block text-xl py-1 px-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
          Regresar
        </button>
      </li>
      <li>
      <button type="button" id="pausar" class="block text-xl py-1 px-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
        Pausar
      </button>
      </li>
    </ul>
  </div>
  </div>
</nav>
</header>

<div class="flex w-full h-screen lg:w-auto lg:h-auto dark:lg:bg-slate-900">
<section class="main-container-video">
  <div class="fila1 flex items-center justify-center mt-9">
    <video src=""></video>
  </div>
  <div class="fila2">
    <div class="barra1">
      <div class="barra2"></div>
    </div>
  </div>
  <div class="fila3">
    <div class="izquierda">
      <button>
        <img id="images" class="play" src="./../../dist/img/iconsVideo/play.svg" alt="play-video"> 
      </button>
      <button>
        <img id="images" class="siguiente" src="./../../dist/img/iconsVideo/siguiente.svg" alt="siguiente-video">
      </button>
      <button>
        <img id="images" class="reiniciar" src="./../../dist/img/iconsVideo/reinicar.svg" alt="reiniciar-video">
      </button>
      <button>
        <img id="images" class="volumen" src="./../../dist/img/iconsVideo/volumen1.svg" alt="volumen-video">
      </button>
      <button class="velocidad font-bold magra-bold text-2xl text-gray-500">
        x1
      </button>
      <div class="estado text-xl px-4 text-gray-500"></div>
    </div>
    <div class="derecha">
      <button>
        <img id="images" class="reducir" src="./../../dist/img/iconsVideo/ampliar.svg" alt="reducir-video">
      </button>
    </div>
  </div>
</section>
<script type="module" src="./../../src/js/videoPlayer/player.js"></script>


<section class="source-sans-pro w-full lg:w-auto dark:bg-slate-900">
  <div class="mt-16">
  <dl class="">
      <dt class="dark:text-gray-500" id="deportista">nombre No econtrado</dt>
      <dd class="dark:text-gray-500" id="delegacion">delegacion No econtrado</dd>
    </dl>
  </div>
  <div class="back-img-model flex flex-col items-center justify-center">
    <div class="grid grid-cols-2 gap-14">
      <div></div>
      <button type="button" id="patada_con_giro"
    class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-sky-500 text-white border-gray-500 hover:bg-sky-300 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300">
    Patada con giro
  </button>  
  <button type="button" id="puño_izquierdo"
    class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-red-900 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300">
    Puño izquierdo
  </button>
  <button type="button" id="puño_derecho"
    class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-red-900 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300">
    Puño derecho
  </button>
  <button type="button" id="patada_izquierda"
    class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-red-700 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300">
    Patada izquierda
  </button>
  <button type="button" id="patada_derecha"
    class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-red-700 text-white border-gray-500 hover:bg-red-500 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300  dark:border-gray-200 ">
    Patada derecha
  </button>
  </div>
  </div>

  <div class="flex justify-center items-center -mt-4 lg:-mt-4 2xl:-mt-10">
    <!-- acierto del golpe -->
    <div class="btns-group1 grid grid-cols-2 gap-3">
    <button type="button" id="trasera"
        class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-yellow-700 text-white border-gray-500 hover:bg-yellow-500 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300">
        Trasera
      </button>
      <button type="button" id="delante"
        class="border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm p-2 bg-yellow-700 text-white border-gray-500 hover:bg-yellow-500 hover:border-gray-600 focus:ring-gray-700 dark:focus:ring-gray-300">
        Delantera
      </button>
      <div class="flex items-center justify-center">
        <button id="confirmar_punto"
          class="h-2/3 border-2 border-green-700 bg-gray-400 font-medium rounded-bl-2xl rounded-b-2xl  text-sm px-1 py-2 text-center dark:text-white hover:bg-green-500">
          +
        </button>
        <button type="button" id="pechera"
          class="p-1 border rounded-lg hover:bg-sky-600 active:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-300 ">
          <img class="w-12 m-0 p-0" src="./../../dist/img/controlPNG/pechera.png" alt="pechera icon">
        </button>
      </div>
      <div class="flex gap-3 items-center justify-center">
        <button type="button" id="casco"
          class="p-1 border rounded-lg hover:bg-sky-600 active:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-300 ">
          <img class="w-12 m-0 p-0" src="./../../dist/img/controlPNG/casco.png" alt="casco icon">
        </button>      
      </div>
    </div>
</div>
   
  <!-- informacion -->
  <article class="flex mt-4 justify-between bg-gray-50 dark:bg-slate-400 sm:p-[11px] md:p-2">
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
      <div class="flex items-center justify-center mx-3 p-2 sm:p-0">
        <button type="button" id="guardar_movimiento"
          class="p-3 focus:outline-none border border-gray-500 text-white bg-green-800 hover:bg-green-700 focus:ring-4 focus:ring-green-600 font-medium rounded-lg text-sm">
          GUARDAR
        </button>
      </div>
  </article>
  <div class="fixed bottom-40 right-5 flex flex-col gap-1 p-1  focus:outline-none border border-gray-500 bg-slate-200 hover:bg-slate-300  dark:text-black dark:bg-slate-800 dark:hover:bg-slate-700 focus:ring-4 focus:ring-slate-600 font-medium rounded-lg text-sm">
    <label for="tiempo-input" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
      Tiempo
    </label>
    <input
      value="0.00"
      type="number" 
      id="tiempo-input" 
      class="w-12 blockp-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      >
  </div>
</section>
</div>

<!-- modal tiempo terminado -->
<div id="modal" class="modal">
  <div class="modal-content-tiempo-terminado lg:w-2/3">
    <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <h3 class="text-xl font-semibold text-white">
        Round Terminado
      </h3>
      <button id="close_button_modal" type="button"
        class="text-gray-400 bg-red-600 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="flex flex-col justify-around items-center gap-4 w-full p-2 m-auto  md:flex-row">
      <div class="flex flex-col gap-2">
        <span id="info-deporstista">none:</span>
        <span id="info-delegacion">delegacion:</span>
        <span id="info-fase">fase:</span>
      </div>
      <div>
        <div class="flex justify-end mr-4 pr-3">
          <ul class="py-3 mb-3">
            <li class="mx-1">Round</li>
            <li id="numero-round" class="mx-1 py-1 px-4 rounded-lg shadow-md shadow-slate-800 text-white bg-slate-600">
              0
            </li>
          </ul>
        </div>
        <div class="flex">
          <div class="flex-1">
            <ul class="p-0 m-0">
              <li class="mx-1">Faltas</li>
              <li id="contador-faltas" class="w-12 mx-1 py-1 px-4 rounded-lg shadow-md shadow-slate-800 text-white bg-slate-600">
                0
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <ul class="p-0 m-0">
              <li class="">
                <label for="ingresar-puntos">Ingresar los puntos:</label>
                <input 
                  id="puntos"
                  name="ingresar-puntos"
                  type="number"
                  min="10" max="100"
                  class=" mx-1 py-1 px-4 rounded-lg shadow-md shadow-slate-800 text-black border-slate-600"
                  />
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <button 
        id="guardar_datos_round"
        type="button"
        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Guardar
      </button>
  </div>
</div>
<!-- modal pausar -->
<div id="modal_contiainer" class="modal">
  <div class="modal-content">
    <p id="modal_meesage" class="text-xl font-semibold text-white"></p>
    <button id="modal_close_message"
      class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Reanudar</button>
  </div>
</div>
<!-- Main modal Faltas -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full sm:w-11/12 sm:h-5/6  ">
  <div class="relative ml-20 w-full h-full max-w-2xl md:h-auto lg:ml-80 2xl:ml-96 sm:w-10/12 sm:h-4/6">
    <!-- Modal content -->
    <div class="relative rounded-lg shadow bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
        <h3 class="text-xl font-semibold text-white">
          Seleccione una falta
        </h3>
        <button type="button"
          class="text-gray-400 bg-red-600 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white"
          data-modal-hide="defaultModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-4 grid gap-2 md:grid-cols-2">
        <div class="flex items-center pl-4 border rounded border-gray-500">
          <input id="bordered_radio_1" type="radio" value="1" name="bordered_radio"
            class="w-4 h-4 text-blue-600ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
          <label for="bordered_radio_1" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
            Agarre
          </label>
        </div>
        <div class="flex items-center pl-4 border rounded border-gray-500">
          <input id="bordered_radio_2" type="radio" value="2" name="bordered_radio"
            class="w-4 h-4 text-blue-600  ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
          <label for="bordered_radio_2" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
            Empujar
          </label>
        </div>
        <div class="flex items-center pl-4 border rounded border-gray-500">
          <input id="bordered_radio_3" type="radio" value="3" name="bordered_radio"
            class="w-4 h-4 text-blue-600ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
          <label for="bordered_radio_3" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
            Salirse del area
          </label>
        </div>
        <div class="flex items-center pl-4 border rounded border-gray-500">
          <input id="bordered_radio_4" type="radio" value="4" name="bordered_radio"
            class="w-4 h-4 text-blue-600  ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
          <label for="bordered_radio_4" class="kanit-ligth w-full py-4 ml-2 text-sm font-medium text-gray-300">
            Ataque al caido
          </label>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t  rounded-b ">
        <button id="boton_aceptar_falta" data-modal-hide="defaultModal" type="button"
          class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
          Aceptar
        </button>
        <button data-modal-hide="defaultModal" type="button"
          class="focus:ring-4 focus:outline-none rounded-lg border  text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">
          Cancelar
        </button>
      </div>
    </div>
  </div>
</div>
<div id="modal_actualizar_resgistro" class="modal">
  <!-- Modal content regresar -->
  <div class="modal-content">
    <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <!-- Modal header regresar -->
      <h3 class="text-xl text-center font-semibold text-white">
        Corregir ultimo registro
      </h3>
      <button id="cerrar_modal_regresar" type="button"
        class="text-gray-400 bg-red-600 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="flex flex-col items-center gap-3 p-2 ">
      <div class="flex gap-5">
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-6 group flex flex-col gap-2">
            <span class="block mb-2 text-sm font-medium text-gray-400">
              Selecione el golpe:
            </span>
            <div class="flex items-center">
              <input id="resgistro-golpe-1" type="radio" value="4" name="resgistro-golpe"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="resgistro-golpe-1" class="ml-2 text-sm font-medium text-gray-300">
                puño derecho
              </label>
            </div>
            <div class="flex items-center">
              <input id="resgistro-golpe-2" type="radio" value="3" name="resgistro-golpe"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="resgistro-golpe-2" class="ml-2 text-sm font-medium text-gray-300">
                puño izquierdo
              </label>
            </div>
            <div class="flex items-center">
              <input id="resgistro-golpe-3" type="radio" value="2" name="resgistro-golpe"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="resgistro-golpe-3" class="ml-2 text-sm font-medium text-gray-300">
                patada derecaha
              </label>
            </div>
            <div class="flex items-center">
              <input id="resgistro-golpe-4" type="radio" value="1" name="resgistro-golpe"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="resgistro-golpe-4" class="ml-2 text-sm font-medium text-gray-300">
                patada izquierda
              </label>
            </div>
            <div class="flex items-center">
              <input id="resgistro-golpe-5" type="radio" value="5" name="resgistro-golpe"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="resgistro-golpe-5" class="ml-2 text-sm font-medium text-gray-300">
                patada con giro
              </label>
            </div>
          </div>
          <div class="relative z-0 w-full mb-6 group flex flex-col gap-2">
            <span class="block mb-2 text-sm font-medium text-gray-400">
              Selecione la posicion:
            </span>
            <div class="flex items-center">
              <input id="registro-posicion-1" type="radio" value="1" name="registro-posicion"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="registro-posicion-1" class="ml-2 text-sm font-medium text-gray-300">
                adelante
              </label>
            </div>
            <div class="flex items-center">
              <input id="registro-posicion-2" type="radio" value="2" name="registro-posicion"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="registro-posicion-2" class="ml-2 text-sm font-medium text-gray-300">
                trasera
              </label>
            </div>
          </div>
          <div class="relative z-0 w-full mb-6 group flex flex-col gap-2">
            <span class="block mb-2 text-sm font-medium text-gray-400">
              Selecione la ubicacion del golpe:
            </span>
            <div class="flex items-center">
              <input id="registro-ubicacion-1" type="radio" value="1" name="registro-ubicacion"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="registro-ubicacion-1" class="ml-2 text-sm font-medium text-gray-300">
                casco
              </label>
            </div>
            <div class="flex items-center">
              <input id="registro-ubicacion-2" type="radio" value="2" name="registro-ubicacion"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="registro-ubicacion-2" class="ml-2 text-sm font-medium text-gray-300">
                pechera
              </label>
            </div>
          </div>
          <div class="relative z-0 w-full mb-6 group flex flex-col gap-2">
            <span class="block mb-2 text-sm font-medium text-gray-400">
              Confirmar punto en pechera:
            </span>
            <div class="flex items-center">
              <input id="registrar-punto-1" type="radio" value="1" name="registrar-punto"
                class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
              <label for="registrar-punto-1" class="ml-2 text-sm font-medium text-gray-300">
                Punto
              </label>
            </div>
          </div>
        </div>
      </div>
      <button id="guardar_registro"
        class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Guardar
      </button>
    </div>
  </div>
</div>
<script>
  const combate = <?= $_GET['combate'] ?>;
  const deportista = <?= $_GET['deportista'] ?>;
</script>
<script src="./../../src/js/logicControl/index.js" type="module"></script>