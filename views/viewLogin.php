<section class="h-screen bg-slate-900">
        <div class="px-6 h-full text-slate-100">
            <div
                class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-5/6 md:h-full g-6">
                <div class="grow-0 shrink-1 -mb-40 md:mb-0 md:shrink-0 basis-auto ">
                    <img src="../dist/img/analytics.png" class="w-28 lg:w-96" alt="icon graphical statistics" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form id="form-login">
                        <div class="flex flex-col max-sm:items-center lg:justify-start sm:items-start">
                            <h2 class="magra-bold text-2xl mb-0 mr-4 p-2 md:text-3xl">
                                Iniciar sesión en Data-Figth
                            </h2>
                        </div>
                        <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-400 before:mt-0.5 after:flex-1 after:border-t after:border-gray-400 after:mt-0.5">
                        </div>

                        <!-- Email input -->
                        <div class="mb-6">
                            <input type="text" 
                                name="email-login"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-slate-900 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-200 focus:bg-slate-800 focus:border-gray-200 focus:outline-none"
                                id="exampleFormControlInput2" placeholder="Dirrecion de correo" />
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input type="password"
                                name="pass-login"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-slate-900 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-200 focus:bg-slate-800 focus:border-gray-200 focus:outline-none"
                                id="exampleFormControlInput2" placeholder="Contraseña" />
                        </div>

                        <!-- confing login -->
                        <div class="flex justify-between items-center mb-6">
                            <div class="form-group form-check">
                                <input type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    id="exampleCheck2" />
                                <label class="source-sans-pro form-check-label inline-block text-slate-400"
                                    for="exampleCheck2">Permanecer Conectado</label>
                            </div>
                            <a href="#!" class="source-sans-pro text-slate-400">No puedes iniciar sesión?</a>
                        </div>

                        <div class="text-center lg:text-left">
                            <button type="submit"
                                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Inicar
                            </button>
                            <p class="source-sans-pro text-sm font-semibold mt-2 pt-1 mb-0">
                                ¿Aún no tienes una cuenta?
                                <a href="./../public/registro.php"
                                    class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out source-sans-pro">
                                    Registrarse
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="./../src/js/usuarios/login.js"></script>