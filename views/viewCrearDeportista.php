<section class="bg-gray-900 2xl:h-screen">
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
                    Crear Deportistas
                </a>
                <p class="kanit-ligth text-slate-200">
                    Rellena el siguiente formulario con sus respectivos campos para crear un deportista
                </p>
                <!-- form -->
                <form id="form-crear-deportista">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_name" id="floating_name"
                            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="floating_name"
                            class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_last-name" id="floating_last-name"
                            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="floating_last-name"
                            class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="sexo" class="block mb-2 text-sm font-medium text-gray-400">
                                    Sexo:
                                </label>
                                <select id="sexo" name="sexo"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option">Seleccione una opcion</option>
                                    <!-- <option value="1">Masculino</option>
                                    <option value="2">Femenino</option> -->
                                </select>
                        </div>
                        <!-- <div class="relative z-0 w-full mb-6 group">
                                <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-400">
                                    Ciudad:
                                </label>
                                <select id="ciudad" name="ciudad"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option">Seleccione una opcion</option>
                                    <option value="1">Espinal</option>
                                    <option value="2">Girardot</option>
                                </select>
                        </div> -->
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="tipo-documento" class="block mb-2 text-sm font-medium text-gray-400">
                                    Tipo de documento:
                                </label>
                                <select id="tipo-documento" name="tipo-documento"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option">Seleccione una opcion</option>
                                    <!-- <option value="1">Tarjeta de identidad</option>
                                    <option value="2">Cedula de ciudadania</option> -->
                                </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="floating_doc" id="floating_doc"
                                    class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="floating_doc"
                                    class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Documento</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="floating_phone"
                                id="floating_phone"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" "/>
                            <label for="floating_phone"
                                class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefono</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="floating_email" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" "/>
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="floating_fecha_Nacimiento" id="floating_fecha_Nacimiento"
                                    class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="floating_fecha_Nacimiento"
                                    class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha De Nacimiento</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="deporte" class="block mb-2 text-sm font-medium text-gray-400">
                                    Deporte:
                                </label>
                                <select id="deporte" name="deporte"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option">Seleccione una opcion</option>
                                    <!-- <option value="1">Taekwondo</option> -->
                                    <!-- <option value="2">Femenino</option> -->
                                </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="departamento" class="block mb-2 text-sm font-medium text-gray-400">
                                    Departamento/estado
                                </label>
                                <select id="departamento" name="departamento"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option">Seleccione una opcion</option>
                                    <!-- <option value="1">Tolima</option>
                                    <option value="2">Cundinamarca</option> -->
                                </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                                <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-400">
                                    Ciudad:
                                </label>
                                <select id="ciudad" name="ciudad"
                                    class="cursor-pointer border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="" id="default-option">Seleccione una opcion</option>
                                    <!-- <option value="1">Espinal</option>
                                    <option value="2">Girardot</option> -->
                                </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-blue-800">
                        Crear Deportista
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="./../../src/js/userLogin/datosFormDeportista.js"></script>
<script src="./../../src/js/userLogin/registroDeportista.js"></script>