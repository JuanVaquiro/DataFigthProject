<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
         <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
               type="button"
               class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
               <span class="sr-only">Open sidebar</span>
               <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" fill-rule="evenodd"
                     d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                  </path>
               </svg>
            </button>
            <a href="./../home" class="flex ml-2 md:mr-24">
               <img class="h-8 mr-3" src="./../../dist/img/analytics.png" alt="logo-DataFight">
               <span
                  class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">DataFight</span>
            </a>
         </div>
         <div class="flex items-center">
            <div class="flex items-center ml-3">
               <div class="dropdown relative inline-block">
                  <a id="drop" class="dark:text-gray-300">
                     <svg aria-hidden="true"
                        class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                     </svg>
                  </a>
                  <div class="menu bg-slate-200 dark:bg-gray-800">
                     <ul class="space-y-3">
                        <li>
                           <a class="flex gap-2 m-3 px-2 py-3 dark:text-white hover-custom">
                              <svg aria-hidden="true"
                  class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                  </path>
               </svg>
                              Perfil
                           </a>
                        </li>
                        <li>
                           <button id="cambiarTema" class="flex gap-2 m-3 px-2 py-3 dark:text-white hover-custom">
                              <svg class="w-6 h-6" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round"
                                    d="M4.069 13h-4.069v-2h4.069c-.041.328-.069.661-.069 1s.028.672.069 1zm3.034-7.312l-2.881-2.881-1.414 1.414 2.881 2.881c.411-.529.885-1.003 1.414-1.414zm11.209 1.414l2.881-2.881-1.414-1.414-2.881 2.881c.528.411 1.002.886 1.414 1.414zm-6.312-3.102c.339 0 .672.028 1 .069v-4.069h-2v4.069c.328-.041.661-.069 1-.069zm0 16c-.339 0-.672-.028-1-.069v4.069h2v-4.069c-.328.041-.661.069-1 .069zm7.931-9c.041.328.069.661.069 1s-.028.672-.069 1h4.069v-2h-4.069zm-3.033 7.312l2.88 2.88 1.415-1.414-2.88-2.88c-.412.528-.886 1.002-1.415 1.414zm-11.21-1.415l-2.88 2.88 1.414 1.414 2.88-2.88c-.528-.411-1.003-.885-1.414-1.414zm2.312-4.897c0 2.206 1.794 4 4 4s4-1.794 4-4-1.794-4-4-4-4 1.794-4 4zm10 0c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6 6 2.686 6 6z">
                                 </path>
                              </svg>
                              Cambiar Tema
                           </button>
                        </li>
                        <li>
                           <a id="logOut" href="#" class="flex gap-2 m-3 px-2 py-3 dark:text-white hover-custom">
                              <svg aria-hidden="true"
                  class="flex-shrink-0 w-6 h-6 text-red-600 transition duration-75 dark:text-red-500 group-hover:text-gray-900 dark:group-hover:text-white"
                  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                     clip-rule="evenodd"></path>
               </svg>
                              Cerrar Session
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</nav>

<aside id="logo-sidebar"
   class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
   aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#"
               class="flex underline underline-offset-2 decoration-indigo-500 items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true"
                  class="w-6 h-6 text-indigo-500 transition duration-75 dark:text-indigo-400 group-hover:text-gray-900 dark:group-hover:text-white"
                  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
               </svg>
               <span class="ml-3">Ver Mis Estadística </span>
            </a>
         </li>
         <li>
            <a  href="./../combate"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               width="28" height="28"  viewBox="0 0 21 21"  xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 3)"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7.5.5c.35132769 0 .69661025.02588228 1.03404495.07584411l.50785434 1.53911115c.44544792.12730646.86820077.30839026 1.26078721.53578009l1.4600028-.70360861c.5166435.39719686.9762801.86487779 1.3645249 1.388658l-.7293289 1.44720284c.2201691.39604534.3936959.82158734.5131582 1.2692035l1.5298263.5338186c.0390082.29913986.0591302.60421522.0591302.91399032 0 .35132769-.0258823.69661025-.0758441 1.03404495l-1.5391112.50785434c-.1273064.44544792-.3083902.86820077-.5357801 1.26078721l.7036087 1.4600028c-.3971969.5166435-.8648778.9762801-1.388658 1.3645249l-1.4472029-.7293289c-.39604532.2201691-.82158732.3936959-1.26920348.5131582l-.5338186 1.5298263c-.29913986.0390082-.60421522.0591302-.91399032.0591302-.35132769 0-.69661025-.0258823-1.03404495-.0758441l-.50785434-1.5391112c-.44544792-.1273064-.86820077-.3083902-1.26078723-.5357801l-1.46000277.7036087c-.51664349-.3971969-.97628006-.8648778-1.36452491-1.388658l.72932886-1.4472029c-.2203328-.39633993-.39395403-.82222042-.51342462-1.27020241l-1.52968981-.53381682c-.03892294-.29882066-.05900023-.60356226-.05900023-.91299317 0-.35132769.02588228-.69661025.07584411-1.03404495l1.53911115-.50785434c.12730646-.44544792.30839026-.86820077.53578009-1.26078723l-.70360861-1.46000277c.39719686-.51664349.86487779-.97628006 1.388658-1.36452491l1.44720284.72932886c.39633995-.2203328.82222044-.39395403 1.27020243-.51342462l.53381682-1.52968981c.29882066-.03892294.60356226-.05900023.91299317-.05900023z" stroke-width=".933"/><circle cx="7.5" cy="7.5" r="3"/></g></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Configurar Combate</span>
            </a>
         </li>
         <li>
            <a href="./../deportista"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" fill-rule="evenodd" viewBox="0 0 256 256"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M120,48a32,32,0,1,1,32,32A32,32,0,0,1,120,48Zm88,88c-28.64,0-41.81-13.3-55.75-27.37-3.53-3.57-7.18-7.26-11-10.58-37-32.14-96.22,22.73-98.72,25.08a8,8,0,0,0,10.95,11.66A163.88,163.88,0,0,1,84,113c13.78-7.38,25.39-10.23,34.7-8.58L64.66,228.81a8,8,0,0,0,4.15,10.52A7.84,7.84,0,0,0,72,240a8,8,0,0,0,7.34-4.81l33.59-77.27L144,180.12V232a8,8,0,0,0,16,0V176a8,8,0,0,0-3.35-6.51l-37.2-26.57L132.88,112c2.64,2.44,5.26,5.07,8,7.84C155.05,134.19,172.69,152,208,152a8,8,0,0,0,0-16Z"></path>
               </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Creear Deportista</span>
            </a>
         </li>
         <li>
            <a href="./../delegacion"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" height="28" width="28" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 3)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 1.5h-4.5c-1.1045695 0-2 .8954305-2 2v9.0003682c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-4.5003682"/><path d="m14.5.46667982c.5549155.5734054.5474396 1.48588056-.0167966 2.05011677l-6.9832034 6.98320341-3 1 1-3 6.9874295-7.04563515c.5136195-.5178979 1.3296676-.55351813 1.8848509-.1045243z"/><path d="m12.5 2.5.953 1"/></g></svg>
               
               <span class="flex-1 ml-3 whitespace-nowrap">Creear Delegación</span>
            </a>
         </li>
         <li>
            <a href="./../evento"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true"
                  class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="28" height="28" 
                  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                     clip-rule="evenodd"></path>
               </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Creear Evento</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64 h-screen dark:bg-gray-900">
   <div class="p-4 rounded-lg mt-14">
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
      </div>
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
      </div>
   </div>
</div>
<script src="./../../src/js/userLogin/logOut.js"></script>
<script src="./../../src/js/stylesJs/menu.js"></script>