<section class="flex flex-col  justify-center items-center h-screen bg-white dark:bg-gray-900">
  <div class="flex items-center p-1 gap-32 sm:gap-96 lg:gap-44">
    <a class="cursor-pointer source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 border-purple-500 text-white bg-purple-600 hover:bg-purple-700 focus:ring-purple-900">
      Ver Mis Estadística 
    </a>

    <div class="dropdown relative inline-block">
      <a id="drop" class="dark:text-gray-300">
        <svg class="w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="m13 16.75c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm2.195-5.992 2.746 2.999c.142.154.342.243.552.243s.41-.088.553-.242l2.757-2.999c.132-.144.197-.326.197-.507 0-.684-.841-1.008-1.303-.508l-2.202 2.397-2.194-2.396c-.46-.503-1.303-.175-1.303.507 0 .18.065.362.197.506zm-2.195.992c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75z"/>
      </svg>  
    </a>
    <div class="menu bg-slate-200 dark:bg-gray-800">
        <ul class="space-y-3">
          <li>
            <a class="flex gap-2 m-3 px-2 py-3 dark:text-white hover-custom">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
              Perfil
            </a>
          </li>
          <li>
            <button id="cambiarTema" class="flex gap-2 m-3 px-2 py-3 dark:text-white hover-custom">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4.069 13h-4.069v-2h4.069c-.041.328-.069.661-.069 1s.028.672.069 1zm3.034-7.312l-2.881-2.881-1.414 1.414 2.881 2.881c.411-.529.885-1.003 1.414-1.414zm11.209 1.414l2.881-2.881-1.414-1.414-2.881 2.881c.528.411 1.002.886 1.414 1.414zm-6.312-3.102c.339 0 .672.028 1 .069v-4.069h-2v4.069c.328-.041.661-.069 1-.069zm0 16c-.339 0-.672-.028-1-.069v4.069h2v-4.069c-.328.041-.661.069-1 .069zm7.931-9c.041.328.069.661.069 1s-.028.672-.069 1h4.069v-2h-4.069zm-3.033 7.312l2.88 2.88 1.415-1.414-2.88-2.88c-.412.528-.886 1.002-1.415 1.414zm-11.21-1.415l-2.88 2.88 1.414 1.414 2.88-2.88c-.528-.411-1.003-.885-1.414-1.414zm2.312-4.897c0 2.206 1.794 4 4 4s4-1.794 4-4-1.794-4-4-4-4 1.794-4 4zm10 0c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6 6 2.686 6 6z"></path>
            </svg>
              Cambiar Tema
            </button>
          </li>
          <li>
            <a id="logOut" href="#" class="flex gap-2 m-3 px-2 py-3 dark:text-white hover-custom">
              <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
                Cerrar Session
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
    </div>
    <div class="flex flex-col items-center">
        <img class="w-1/4" src="./../../dist/img/analytics.png" alt="logo-DataFight">
        <h2 class="magra-bold text-2xl md:text-4xl flex mb-6 dark:text-white">
            Data Fight
        </h2>
        <div class="grid grid-cols-2 gap-3">
            <a href="./../combate" class="cursor-pointer source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-600 border-blue-500 text-white hover:bg-blue-700 focus:ring-sky-800">
              Configurar combate
            </a>
            <a href="./../deportista" class="cursor-pointer source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-600 border-blue-500 text-white hover:bg-blue-700 focus:ring-sky-800">
              Creear Deportista
            </a>
            <a href="./../delegacion" class="cursor-pointer source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-600 border-blue-500 text-white hover:bg-blue-700 focus:ring-sky-800">
              Creear Delegación
            </a>
            <a href="./../evento" class="cursor-pointer source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-600 border-blue-500 text-white hover:bg-blue-700 focus:ring-sky-800">
              Creear evento
            </a>
        </div>
    </div>    
</section>
<script src="./../../src/js/userLogin/logOut.js"></script>
<script src="./../../src/js/stylesJs/menu.js"></script>
<script src="./../../src/js/darkMode/index.js"></script>