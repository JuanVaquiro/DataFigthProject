<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<section class="bg-white p-8 sm:ml-64 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  md:h-full md:p-10">
        <div class="my-5 w-full rounded-lg shadow border 2xl:max-w-screen-2xl lg:max-w-screen-lg md:mt-0 sm:max-w-2xl xl:p-0 bg-gray-50 dark:bg-gray-800 border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h2 class="magra-bold text-2xl md:text-3xl flex gap-4 items-center mb-6 dark:text-white">
                    Configurar Combate
                </h2>
                <p class="kanit-ligth dark:text-slate-200">
                    Rellena el siguiente formulario con sus respectivos campos para iniciar un combate
                </p>
                <!-- form -->
                <form class="" id="form_config_combate">
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="deportista_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Deportista #1:
                            </label>
                            <select name="deportista_1" id="deportista_1"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Deportista</option>
                                <!-- <option value="1">Juan Rodriguez</option>
                                <option value="2">Carlos Casanres Riano Poas</option> -->
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="delegacion_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Delegacion #1:
                            </label>
                            <select name="delegacion_1" id="delegacion_1"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Delegacion</option>
                                <!-- <option value="1">Dragones Cop</option>
                                <option value="2">Fenix-Bogota</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="deportista_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Deportista #2:
                            </label>
                            <select name="deportista_2" id="deportista_2"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Deportista 2</option>
                                <!-- <option value="1">Juan Rodriguez</option>
                                <option value="2">Carlos Casanres Riano Poas</option> -->
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="delegacion_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Delegacion #2:
                            </label>
                            <select name="delegacion_2" id="delegacion_2"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Delegacion 2</option>
                                <!-- <option value="1">Dragones Cop</option>
                                <option value="2">Fenix-Bogota</option> -->
                            </select>
                        </div>
                    </div>
                   <!--  <div class="relative z-0 w-full mb-6 group flex flex-col gap-2" id="deportes">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Selecione el Deporte:
                        </span>
                        <div class="flex items-center">
                            <input id="deporte-radio-1" type="radio" value="" name="deporte-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="deporte-radio-1" class="ml-2 text-sm font-medium dark:text-gray-300">
                                Taekwondo
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="deporte-radio-2" type="radio" value="" name="deporte-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="deporte-radio-2" class="ml-2 text-sm font-medium text-gray-300">
                                Judo
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="deporte-radio-3" type="radio" value="" name="deporte-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="deporte-radio-3" class="ml-2 text-sm font-medium text-gray-300">
                                Karate
                            </label>
                        </div>
                    </div>  -->
                    <div class="relative z-0 w-full mb-6 group">
                    <label for="fase-ronda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Fase Ronda:
                            </label>
                            <select name="fase-ronda" id="fase-ronda"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione una Ronda</option>
                                <!-- <option value="1">Ronda clasificatoria</option>
                                <option value="2">Fase de grupos</option>
                                <option value="3">Treintaidosavos de final</option>
                                <option value="4">Dieciseisavos de final</option>
                                <option value="5">Octavos de final</option>
                                <option value="6">Cuartos de final</option>
                                <option value="7">Semifinales</option>
                                <option value="8">Final</option> -->
                            </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group flex flex-col gap-2">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Numero de Round:
                        </span>
                        <div class="flex items-center">
                            <input id="numero-round-radio-1" type="radio" value="2" name="numero-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="numero-round-radio-1" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                2 Round
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="numero-round-radio-2" type="radio" value="" name="numero-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="numero-round-radio-2" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                3 Round
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="numero-round-radio-3" type="radio" value="" name="numero-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="numero-round-radio-3" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                4 Round
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="numero-round-radio-4" type="radio" value="" name="numero-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="numero-round-radio-4" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                5 Round
                            </label>
                        </div>
                    </div>
                    
                    <div class="relative z-0 w-full mb-6 group flex flex-col gap-2">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Duracion del Round:
                        </span>
                        <div class="flex items-center">
                            <input id="duracion-round-radio-1" type="radio" value="2" name="duracion-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="duracion-round-radio-1" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                2 Minutos
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="duracion-round-radio-2" type="radio" value="" name="duracion-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="duracion-round-radio-2" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                3 Minutos
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="duracion-round-radio-3" type="radio" value="" name="duracion-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="duracion-round-radio-3" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                4 Minutos
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="duracion-round-radio-4" type="radio" value="" name="duracion-round-radio" class="w-4 h-4 text-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                            <label for="duracion-round-radio-4" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">
                                5 Minutos
                            </label>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="datetime_local" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Fecha y Hora:
                        </label>
                        <input type="datetime-local" id="datetime_local" name="datetime_local"
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm w-full xl:w-2/5 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="arbitro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Arbitro:
                        </label>
                        <select name="arbitro" id="arbitro"
                            class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" id="default-option">Seleccione un Arbitro</option>
                            <!-- <option value="1">Juan Rodriguez</option>
                            <option value="2">Carlos Casanres Riano Poas</option> -->
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="evento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Evento:
                        </label>
                        <select name="evento" id="evento"
                            class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" id="default-option">Seleccione un Evento</option>
                            <!-- <option value="1">Campeonato de las rosas 2023</option>
                            <option value="2">Copa Federacion Ranking Nacional G2 2022</option> -->
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-blue-800">
                        Crear Combate
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="./../../src/js/userLogin/datosFormCombate.js"></script>
<script src="./../../src/js/userLogin/crearCombate.js"></script>