<section class="bg-gray-900 2xl:h-screen setctionConfigCombat">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  md:h-full md:p-10">
        <div class="my-5 w-full rounded-lg shadow border md:mt-0 sm:max-w-2xl xl:p-0 bg-gray-800 border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <a href="/public/home/" class="magra-bold text-2xl md:text-3xl flex gap-4 items-center mb-6 text-white">
                    <svg class="hover:text-gray-400" viewBox="0 0 21 21" width="41" height="41" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 6)"><path d="m1.378 1.376 4.243.003v4.242"
                    transform="matrix(-.70710678 .70710678 .70710678 .70710678 3.500179 -1.449821)" /><path d="m5.5 9.49998326h5c2 .00089417 3-.99910025 3-2.99998326s-1-3.00088859-3-3.00001674h-10" /></g>
                    </svg>
                    Configurar Combate
                </a>
                <p class="kanit-ligth text-slate-200">
                    Rellena el siguiente formulario con sus respectivos campos para iniciar un combate
                </p>
                <!-- form -->
                <form class="">
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="deportista_1" class="block mb-2 text-sm font-medium text-gray-400">
                                Deportista #1:
                            </label>
                            <select name="deportista_1" id="deportista_1" required
                                class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Deportista</option>
                                <option value="1">Juan Rodriguez</option>
                                <option value="2">Carlos Casanres Riano Poas</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="delegacion_1" class="block mb-2 text-sm font-medium text-gray-400">
                                Delegacion #1:
                            </label>
                            <select name="delegacion_1" id="delegacion_1" required
                                class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Delegacion</option>
                                <option value="1">Dragones Cop</option>
                                <option value="2">Fenix-Bogota</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="deportista_2" class="block mb-2 text-sm font-medium text-gray-400">
                                Deportista #2:
                            </label>
                            <select name="deportista_2" id="deportista_2" required
                                class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Deportista 2</option>
                                <option value="1">Juan Rodriguez</option>
                                <option value="2">Carlos Casanres Riano Poas</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="delegacion_2" class="block mb-2 text-sm font-medium text-gray-400">
                                Delegacion #2:
                            </label>
                            <select name="delegacion_2" id="delegacion_2" required
                                class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un Delegacion 2</option>
                                <option value="1">Dragones Cop</option>
                                <option value="2">Fenix-Bogota</option>
                            </select>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="select_deporte" class="block mb-2 text-sm font-medium text-gray-400">
                            Deporte
                        </label>
                        <select name="select_deporte" id="select_deporte" required
                            class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="" id="default-option">Seleccione el Deporte</option>
                            <option value="1">Taekwondo</option>
                            <option value="2">Boxeo</option>
                            <option value="3">Judo</option>
                            <option value="4">Karate</option>
                            <option value="5">Kickboxing</option>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="fase_ronda" class="block mb-2 text-sm font-medium text-gray-400">
                            Fase Ronda:
                        </label>
                        <input type="text" name="fase_ronda" id="fase_ronda" required
                            class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            placeholder="ej: cuartos de final">
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="datetime_local" class="block mb-2 text-sm font-medium text-gray-400">
                            Fecha y Hora
                        </label>
                        <input type="datetime-local" id="datetime_local" name="datetime_local" required
                            class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="duracion_round" class="block mb-2 text-sm font-medium text-gray-400">
                            Durcion del Round
                        </label>
                        <select name="duracion_round" id="duracion_round" required
                            class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="" id="default-option">Seleccione el tiempo</option>
                            <option value="1">1 Minuto</option>
                            <option value="2">2 Minutos</option>
                            <option value="3">3 Minutos</option>
                            <option value="4">4 Minutos</option>
                            <option value="5">5 Minutos</option>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="arbitro" class="block mb-2 text-sm font-medium text-gray-400">
                            Arbitro:
                        </label>
                        <select name="arbitro" id="arbitro" required
                            class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="" id="default-option">Seleccione un Arbitro</option>
                            <option value="1">Juan Rodriguez</option>
                            <option value="2">Carlos Casanres Riano Poas</option>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="evento" class="block mb-2 text-sm font-medium text-gray-400">
                            Evento:
                        </label>
                        <select name="evento" id="evento" required
                            class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="" id="default-option">Seleccione un Evento</option>
                            <option value="1">Campeonato de las rosas 2023</option>
                            <option value="2">Copa Federacion Ranking Nacional G2 2022</option>
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