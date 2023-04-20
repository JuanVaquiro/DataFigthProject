<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<section class="p-4 sm:ml-64 bg-white 2xl:h-screen dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg"fill="currentColor" viewBox="0 0 256 256"><path d="M237.66,117.66l-80,80A8,8,0,0,1,144,192V152.23c-57.1,3.24-96.25,40.27-107.24,52h0a12,12,0,0,1-20.68-9.58c3.71-32.26,21.38-63.29,49.76-87.37,23.57-20,52.22-32.69,78.16-34.91V32a8,8,0,0,1,13.66-5.66l80,80A8,8,0,0,1,237.66,117.66Z"></path></svg>
                Tutorial
            </a>
            <h1 class="magra-bold text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">
                ¡Bienvenido DataFight!
            </h1>
            <h2 class="source-sans-pro text-gray-900 dark:text-white text-xl md:text-2xl font-extrabold mb-2">
                Plataforma para la recolección de datos de rendimiento en taekwondo
            </h2>
            <p class="kanit-ligth text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                Te permite registrar y analizar el rendimiento de los deportistas 
                de taekwondo,
                lo que te permitirá tomar decisiones informadas para mejorar su desempeño.
            </p>
            <a href="#" class="source-sans-pro inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Leer más
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg  class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 256 256"><path d="M224,112v32a8,8,0,0,1-8,8H48v16h88a8,8,0,0,1,8,8v24a8,8,0,0,1-8,8H48v8a8,8,0,0,1-16,0V40a8,8,0,0,1,16,0v8H168a8,8,0,0,1,8,8V80a8,8,0,0,1-8,8H48v16H216A8,8,0,0,1,224,112Z"></path></svg>
                    Graficas
                </a>
                <h2 class="magra-bold text-gray-900 dark:text-white text-3xl font-extrabold mb-2">
                     Patrones de rendimiento
                </h2>
                <p class="kanit-ligth text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                    Visualizar los datos recolectados en gráficos intuitivos para identificar
                    patrones y tendencias en el rendimiento de los deportistas.
                </p>
                <a href="#" class="source-sans-pro text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">
                    Ver estadisticas
                    <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256"><path d="M236,208a12,12,0,0,1-12,12H32a12,12,0,0,1-12-12V48a12,12,0,0,1,24,0v99l43.51-43.52a12,12,0,0,1,17,0L128,127l43-43H160a12,12,0,0,1,0-24h40a12,12,0,0,1,12,12v40a12,12,0,0,1-24,0V101l-51.51,51.52a12,12,0,0,1-17,0L96,129,44,181v15H224A12,12,0,0,1,236,208Z"></path></svg>
                    Rendimiento
                </a>
                <h2 class="magra-bold text-gray-900 dark:text-white text-3xl font-extrabold mb-2">
                    Seguimiento individualizado
                </h2>
                <p class="kanit-ligth text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                    Un seguimiento individualizado del progreso de cada deportista 
                    y ajustar su entrenamiento en consecuencia.
                </p>
                <a href="#" class="source-sans-pro text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Ver deportistas
                    <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
