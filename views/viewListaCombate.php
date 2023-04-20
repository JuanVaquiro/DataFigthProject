<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<div class="h-screen overflow-x-auto shadow-md pt-24 px-5 sm:ml-64 dark:bg-gray-900">
    <div class="flex items-center w-[645px] lg:w-auto justify-between p-4 bg-white dark:bg-gray-800">
        <div class="flex gap-4 mr-3">
            <h2 class="magra-bold text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                Lista de Combates
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
                    <div class="flex gap-6 ml-4">
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
        <tbody id="cuerto-tabla">
           <!-- Iterar datos -->
        </tbody>
    </table>
</div>  
<script type="module" src="./../../src/js/FightList/fetchData.js"></script>
<script type="module" src="./../../src/js/FightList/accionTable.js"></script>
