const URL = "https://pokeapi.co/api/v2/pokemon/?limit=4";

const table = document.getElementById("tabla-combates");

fetch(URL)
  .then(response => response.json())
  .then(data => {
    data.results.forEach(item => {

      const newRow = table.insertRow();
      newRow.classList.add("bg-white", "border-b", "dark:bg-gray-800", "dark:border-gray-700", "hover:bg-gray-50", "dark:hover:bg-gray-600");

      // Desporstias
      const deportistas = newRow.insertCell();
      deportistas.classList.add("flex", "items-center", "text-gray-900", "whitespace-nowrap", "dark:text-white", "px-6", "py-4")
      deportistas.innerHTML = `
      <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
      <div class="pl-3 flex items-center gap-2">
        <div id="deportista-1" class="text-base font-semibold">${item.name}</div>
        <span>VS</span>
        <div id="deportista-2" class="text-base font-semibold">${item.name}</div>
      </div>
      </th>
    `;

      // Fase
      const faseRondaCelda = newRow.insertCell();
      faseRondaCelda.classList.add("px-6", "py-4")
      faseRondaCelda.textContent = item.url;

      // Estado
      const estadoCelda = newRow.insertCell();
      estadoCelda.classList.add("px-6", "py-4")
      estadoCelda.innerHTML = `
      <div class="flex items-center">
        <div class="h-2.5 w-2.5 rounded-full ${item.name !== 'activo' ? 'bg-green-500' : 'bg-red-500'} mr-2"></div>
        ${item.name}
      </div>
    `

      // Accion
      const acccionCelda = newRow.insertCell();
      acccionCelda.classList.add("px-6", "py-4")
      acccionCelda.innerHTML = ` 
      <div class="flex items-center gap-1">
        <button class="eliminar-registro-tabla" data-tooltip-target="tooltip-animation" type="button">
            <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                <path
                    d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                </path>
            </svg>
            <div id="tooltip-animation" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-500">
                Eliminar
            </div>
        </button>
        <a href="#" type="button" data-tooltip-target="tooltip-animation-edit">
            <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 256 256">
                <path
                    d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                </path>
            </svg>
            <div id="tooltip-animation-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-500">
                Editar
            </div>
        </a>
        <button class="iniciar_combate_select" type="button" 
            data-modal-show="editUserModal"
            data-tooltip-target="tooltip-animation-init"
            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
            </svg>   
            <div id="tooltip-animation-init" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-500">
                Iniciar
            </div> 
          </button>
      </div>`
    });
  })
  .catch(error => console.error(error));

