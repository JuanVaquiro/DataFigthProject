<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<section class="bg-white p-8 sm:ml-64 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full md:p-10">
        <div
            class="my-5 w-full rounded-lg shadow border 2xl:max-w-screen-2xl lg:max-w-screen-lg md:mt-0 sm:max-w-2xl xl:p-0 bg-gray-50 dark:bg-gray-800 border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h2 class="magra-bold text-2xl md:text-3xl flex gap-4 items-center mb-6 dark:text-white">
                    Crear Deportistas
                </h2>
                <p class="kanit-ligth dark:text-slate-200">
                    Rellena el siguiente formulario con sus respectivos campos para crear un deportista
                </p>
                <!-- form -->
                <form id="form-crear-deportista">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_name" id="floating_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="floating_name"
                            class="peer-focus:font-medium block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 absolute duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Nombre
                        </label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_last-name" id="floating_last-name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="floating_last-name"
                            class="peer-focus:font-medium absolute text-sm font-medium text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Apellidos
                        </label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="floating_phone" id="floating_phone"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_phone"
                                class="peer-focus:font-medium absolute text-sm font-medium text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Telefono
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="floating_email" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm font-medium text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Email
                            </label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="tipo-documento"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tipo de documento:
                            </label>
                            <select id="tipo-documento" name="tipo-documento"
                                class="cursor-pointer shadow-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                <option value="" id="default-option">Seleccione una opcion</option>
                                <!-- <option value="1">Tarjeta de identidad</option>
                                <option value="2">Cedula de ciudadania</option> -->
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="floating_doc"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Documento
                            </label>
                            <input type="text" name="floating_doc" id="floating_doc"
                                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="floating_fecha_Nacimiento" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Fecha De Nacimiento
                            </label>
                            <input type="date" name="floating_fecha_Nacimiento" id="floating_fecha_Nacimiento"
                                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="deporte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Deporte:
                            </label>
                            <select id="deporte" name="deporte"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione una opcion</option>
                                <!-- <option value="1">Taekwondo</option> -->
                                <!-- <option value="2">Femenino</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="pais" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Pais
                            </label>
                            <select id="pais" name="pais"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value=" " id="default-option">Seleccione un pais</option>
                                <!-- <option value="1">Tolima</option>
                                    <option value="2">Cundinamarca</option> -->
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="departamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Departamento/estado
                            </label>
                            <select id="departamento" name="departamento" disabled
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione un departamento o estado</option>
                                <!-- <option value="1">Espinal</option>
                                    <option value="2">Girardot</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Ciudad:
                            </label>
                            <select id="ciudad" name="ciudad" disabled
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" id="default-option">Seleccione una ciudad</option>
                                <!-- <option value="1">Espinal</option>
                                    <option value="2">Girardot</option> -->
                            </select>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Sexo:
                            </label>
                            <select id="sexo" name="sexo"
                                class="cursor-pointer bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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