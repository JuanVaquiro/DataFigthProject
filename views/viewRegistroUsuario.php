<section class=" bg-gray-900 xl:h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  md:h-full md:p-10">
            <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-2xl xl:p-0 bg-gray-800 border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <a href="#" class="magra-bold text-2xl md:text-3xl flex items-center mb-6 text-white">
                        <img class="w-8 h-8 mr-2" src="./../dist/img/analytics.png" alt="logo">
                        Crear cuenta Data-Figth
                    </a>

                    <p class="kanit-ligth text-slate-200">Empieza ya a registros tus datos de combate. ¿Ya tienes una
                        cuenta?
                        <a href="#" class="kanit-ligth text-blue-500 hover:underline hover:underline-offset-1">Ingresa
                            aquí. </a>
                    </p>

                    <!-- form -->
                    <form class="space-y-4 md:space-y-6" id="form-registro">
                        <!-- container inputs -->
                        <div class="flex flex-col gap-3 md:grid md:grid-cols-2 md:gap-6">
                            <!-- firt-name input -->
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-white">
                                    Nombres
                                </label>
                                <input type="text" name="name" id="name"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="David Lupcropt">
                            </div>
                            <div>
                                <!-- last-name input -->
                                <label for="last-name" class="block mb-2 text-sm font-medium text-white">
                                    Apellidos
                                </label>
                                <input type="text" name="last-name" id="last-name"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Romero A.D">
                            </div>
                            <!-- tipo de documento input -->
                            <div>
                                <label for="type_document" class="block mb-2 text-sm font-medium text-white">
                                    Tipo De Documento
                                </label>
                                <select name="type_document" id="type_document"  class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Seleccione Una Opcion</option>
                                    <option value="1">Tarjeta De Identidad</option>
                                    <option value="2">Cedula De Ciudadania</option>
                                </select>
                            </div>
                             <!-- document input  -->
                             <div>
                                <label for="document" class="block mb-2 text-sm font-medium text-white">
                                    Documento
                                </label>
                                <input type="text" name="document" id="document"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            </div>
                               <!-- email input -->
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">
                                    Correo electronico
                                </label>
                                <input type="text" name="email" id="email"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="name@company.com">
                            </div>
                            <!-- telefono input -->
                            <div>
                                <label for="telefono" class="block mb-2 text-sm font-medium text-white">
                                    Telefono
                                </label>
                                <input type="text" name="telefono" id="telefono"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <!-- date input -->
                            <div>
                                <label for="date" class="block mb-2 text-sm font-medium text-white">
                                    Fecha de nacimineto
                                </label>
                                <input type="date" name="date" id="date"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <!-- password input -->
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">
                                    Contraseña
                                </label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="confirm-password" class="block mb-2 text-sm font-medium text-white">
                                    Confirmar Contrsena
                                </label>
                                <input type="password" name="confirm-password" id="confirm-password"
                                    placeholder="••••••••"
                                    class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            </div>

                        </div>

                        <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-400 before:mt-0.5 after:flex-1 after:border-t after:border-gray-400 after:mt-0.5">
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border rounded focus:ring-3 focus:ring-primary-300 bg-gray-700 border-gray-600 focus:ring-primary-600 ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="kanit-ligth max-w-prose font-light text-gray-300">
                                    Al registrarse, está creando una cuenta de Data-Figth y acepta los
                                    <a href="#" class="kanit-ligth font-medium text-blue-600 hover:underline">
                                        Términos de uso
                                    </a>
                                    y la
                                    <a href="#" class="kanit-ligth font-medium text-blue-600 hover:underline">
                                        Política de privacidad
                                    </a>
                                    de Data-Figth.
                                </label>
                            </div>
                        </div>
                        <!-- submit -->
                        <button type="submit"
                            id="btn-registrar"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-blue-800">
                            Crear Cuenta
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="./../src/js/usuarios/registroUsuario.js"></script>