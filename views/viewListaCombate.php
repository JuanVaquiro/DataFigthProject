<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<div class="h-screen overflow-x-auto shadow-md pt-24 px-5 sm:ml-64 dark:bg-gray-900">
    <div class="flex items-center w-[645px] lg:w-auto justify-between p-4 bg-white dark:bg-gray-800">
        <div class="flex gap-4 mr-3">
            <h2 class="text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                Lista de combates
            </h2>
            <select id="small" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="1" selected>Activos</option>
                <option value="2">Inactivos</option>
            </select>
        </div>
        <label for="table-search" class="sr-only">Buscar</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Buscar Combates" 
            />
        </div>
    </div>
    <table id="tabla-combates" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs  rounded-lg  text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <div class="flex gap-4 ml-2">
                        Deportista #1
                            <span>VS</span>
                        Deportista #2
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Fase-ronda
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3 flex items-center gap-2">
                        <div id="deportista-1" class="text-base font-semibold">Neil Sims</div>
                            <span>VS</span>
                        <div id="deportista-2" class="text-base font-semibold">Diego Franco</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    final
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                        activo
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- btn action table -->
                    <div class="flex items-center gap-1">
                        <button class="eliminar-registro-tabla" data-tooltip-target="tooltip-animation" type="button">
                            <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                                <path
                                     d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                                </path>
                            </svg>
                            <div id="tooltip-animation" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-500">
                                Eliminar
                            </div>
                        </button>
                        <a href="#" type="button" data-tooltip-target="tooltip-animation-edit">
                            <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 256 256">
                                <path
                                    d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                                </path>
                            </svg>
                            <div id="tooltip-animation-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-500">
                                Editar
                            </div>
                        </a>
                        <button class="iniciar_combate_select" type="button" 
                            data-modal-show="editUserModal"
                            data-tooltip-target="tooltip-animation-init"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
                            </svg>   
                            <div id="tooltip-animation-init" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-500">
                                Iniciar
                            </div> 
                        </button>
                    </div>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row"
                    class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3 flex items-center gap-2">
                        <div class="text-base font-semibold">Neil Sims</div>
                            <span>VS</span>
                        <div class="text-base font-semibold">Diego Franco</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    semifinal
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> 
                        Inactivo
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- btn action table -->
                    <div class="flex items-center gap-1">
                        <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                            </path>
                        </svg>
                        <a href="#" type="button" data-modal-show="editUserModal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
                            </svg>  
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

  <!-- Modal seleccionar deporstista -->
<div id="modal_seleccionar_deportista" class="modal">
  <!-- Modal content select -->
  <div class="modal-content">
    <div class="flex items-start justify-between w-full p-4 border-b rounded-t border-gray-600">
      <!-- Modal header tiempo -->
      <h3 class="text-xl text-center font-semibold text-white">
        Por favor seleccione el deportista
      </h3>
      <button id="cerrar_modal_seleccionar" type="button"
        class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="flex gap-4 w-full">
        <div class="flex w-full items-center p-4 border rounded border-gray-700">
            <input id="deportista_1" type="radio" value="" name="bordered-radio-deportista" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
            <label for="deportista_1" class="flex flex-col w-full py-4 ml-2 text-sm font-medium text-gray-300">
                Deportista #1
                <span>NAMI RAMIREZ RODRIGUEZ SANCHEZ</span>
            </label>
        </div>
        <div class="flex w-full items-center p-4 border rounded border-gray-700">
            <input checked id="deportista_2" type="radio" value="" name="bordered-radio-deportista" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
            <label for="deportista_2" class="flex flex-col w-full py-4 ml-2 text-sm font-medium text-gray-300">
                Deportista #2
                <span>JUAN PABLO DIAZ CORTEZ</span>
            </label>
        </div>
    </div>
    <button id="guardar_tiempo"
        class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Iniciar
      </button>
  </div>
</div>
<script src="./../../src/js/FightList/index.js"></script>
<script src="./../../src/js/FightList/fetchData.js"></script>
