<section class="bg-gray-900 lg:h-screen setctionConfigCombat">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  md:h-full md:p-10">
        <div class="my-5 w-full rounded-lg shadow border md:mt-0 sm:max-w-2xl xl:p-0 bg-gray-800 border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <a href="../home" class="magra-bold text-2xl md:text-3xl flex gap-4 items-center mb-6 text-white">
                    <svg class="hover:text-gray-400" viewBox="0 0 21 21" width="41" height="41"
                        xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" transform="translate(3 6)">
                            <path d="m1.378 1.376 4.243.003v4.242"
                                transform="matrix(-.70710678 .70710678 .70710678 .70710678 3.500179 -1.449821)" />
                            <path
                                d="m5.5 9.49998326h5c2 .00089417 3-.99910025 3-2.99998326s-1-3.00088859-3-3.00001674h-10" />
                        </g>
                    </svg>
                    Crear Delegacion
                </a>
                <p class="kanit-ligth text-slate-200">
                    Rellena el siguiente formulario con sus respectivos campos para crear una delegacion
                </p>
                <!-- form -->

                <form id="form-delegacion">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_delegacion" id="floating_delegacion"
                            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="floating_delegacion"
                            class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre Delegacion</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_description" id="floating_description"
                            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="floating_description"
                            class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_siglas" id="floating_siglas"
                            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="floating_siglas"
                            class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Iniciales</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                                <label for="pais" class="block mb-2 text-sm font-medium text-gray-400">
                                    Pais
                                </label>
                                <select id="pais" name="pais"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value=" " id="default-option-ciudad">Seleccione un pais</option>
                                    <!-- <option value="1">Espinal</option>
                                    <option value="2">Girardot</option> -->
                                </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="departamento" class="block mb-2 text-sm font-medium text-gray-400">
                                    Departamento/estado
                                </label>
                                <select id="departamento" name="departamento"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" disabled>
                                    <option value=" " id="default-option-departamento">Seleccione un departamento o estado</option>
                                    <!-- <option value="1">Masculino</option>
                                    <option value="2">Femenino</option> -->
                                </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-400">
                                    Ciudad:
                                </label>
                                <select id="ciudad" name="ciudad"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" disabled>
                                    <option value="" id="default-option-ciudad">Seleccione una ciudad</option>
                                    <!-- <option value="1">Espinal</option>
                                    <option value="2">Girardot</option> -->
                                </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="deporte" class="block mb-2 text-sm font-medium text-gray-400">
                                    Deporte:
                                </label>
                                <select id="deporte" name="deporte"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option-ciudad">Seleccione una ciudad</option>
                                    <!-- <option value="1">Espinal</option>
                                    <option value="2">Girardot</option> -->
                                </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-blue-800">
                        Crear Delegacion
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="./../../src/js/userLogin/datosFormDelegacion.js"></script>
<script src="./../../src/js/userLogin/crearDelegacion.js"></script>