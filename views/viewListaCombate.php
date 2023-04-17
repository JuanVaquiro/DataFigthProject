<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<div class="h-screen overflow-x-auto shadow-md pt-24 px-5 sm:ml-64 dark:bg-gray-900">
    <div class="flex items-center w-[645px] lg:w-auto justify-between p-4 bg-white dark:bg-gray-800">
        <div>
            <h2 class="text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                Lista de combates
            </h2>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Search for users" 
            />
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs  rounded-lg  text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <div>
                        <span>
                            Deportista1
                        </span>
                        <span>
                            Deportista2
                        </span>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Fase-ronda
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <svg class="text-gray-500 transition duration-75 dark:text-gray-400" fill="currentColor" width="24"
                        height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                            d="M10.381 21.275l-6.631-3.787 1.391-2.384 6.631 3.787-1.391 2.384zm7.82-19.68c-1.957-1.134-3.641-1.665-5.032-1.588-2.093.117-3.933 1.233-3.621 4.89-.394-2.267-1.817-4.178-3.5-3.869-2.234.41-1.649 3.302-1.435 5.706.191 2.155.408 4.598-.7 6.502l-2.913 4.991 10.11 5.773 2.907-4.984c1.429-2.435 3.055-3.631 4.63-4.789 1.068-.787 4.353-2.998 4.353-6.193 0-2.645-2.251-4.962-4.799-6.439" />
                    </svg>
                    <div class="pl-3 flex items-center gap-2">
                        <div class="text-base font-semibold">Neil Sims</div>
                            <span>VS</span>
                        <div class="text-base font-semibold">Diego Franco</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    final
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                        activo
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- btn action table -->
                    <div class="flex items-center gap-1">
                        <a href="# " type="button">
                            <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 256 256">
                                <path
                                    d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" type="button">
                            <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 256 256">
                                <path
                                    d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" type="button" data-modal-show="editUserModal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
                            </svg>    
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row"
                    class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <svg class="text-gray-500 transition duration-75 dark:text-gray-400" fill="currentColor" width="24"
                        height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                            d="M10.381 21.275l-6.631-3.787 1.391-2.384 6.631 3.787-1.391 2.384zm7.82-19.68c-1.957-1.134-3.641-1.665-5.032-1.588-2.093.117-3.933 1.233-3.621 4.89-.394-2.267-1.817-4.178-3.5-3.869-2.234.41-1.649 3.302-1.435 5.706.191 2.155.408 4.598-.7 6.502l-2.913 4.991 10.11 5.773 2.907-4.984c1.429-2.435 3.055-3.631 4.63-4.789 1.068-.787 4.353-2.998 4.353-6.193 0-2.645-2.251-4.962-4.799-6.439" />
                    </svg>
                    <div class="pl-3 flex items-center gap-2">
                        <div class="text-base font-semibold">Neil Sims</div>
                            <span>VS</span>
                        <div class="text-base font-semibold">Diego Franco</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    preliminar
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                        activo
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- btn action table -->
                    <div class="flex items-center gap-1">
                        <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                            </path>
                        </svg>
                        <a href="#" type="button" data-modal-show="editUserModal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row"
                    class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <svg class="text-gray-500 transition duration-75 dark:text-gray-400" fill="currentColor" width="24"
                        height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                            d="M10.381 21.275l-6.631-3.787 1.391-2.384 6.631 3.787-1.391 2.384zm7.82-19.68c-1.957-1.134-3.641-1.665-5.032-1.588-2.093.117-3.933 1.233-3.621 4.89-.394-2.267-1.817-4.178-3.5-3.869-2.234.41-1.649 3.302-1.435 5.706.191 2.155.408 4.598-.7 6.502l-2.913 4.991 10.11 5.773 2.907-4.984c1.429-2.435 3.055-3.631 4.63-4.789 1.068-.787 4.353-2.998 4.353-6.193 0-2.645-2.251-4.962-4.799-6.439" />
                    </svg>
                    <div class="pl-3 flex items-center gap-2">
                        <div class="text-base font-semibold">Neil Sims</div>
                            <span>VS</span>
                        <div class="text-base font-semibold">Diego Franco</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    fase-grupos
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                        activo
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- btn action table -->
                    <div class="flex items-center gap-1">
                        <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                            </path>
                        </svg>
                        <a href="#" type="button" data-modal-show="editUserModal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row"
                    class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <svg class="text-gray-500 transition duration-75 dark:text-gray-400" fill="currentColor" width="24"
                        height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                            d="M10.381 21.275l-6.631-3.787 1.391-2.384 6.631 3.787-1.391 2.384zm7.82-19.68c-1.957-1.134-3.641-1.665-5.032-1.588-2.093.117-3.933 1.233-3.621 4.89-.394-2.267-1.817-4.178-3.5-3.869-2.234.41-1.649 3.302-1.435 5.706.191 2.155.408 4.598-.7 6.502l-2.913 4.991 10.11 5.773 2.907-4.984c1.429-2.435 3.055-3.631 4.63-4.789 1.068-.787 4.353-2.998 4.353-6.193 0-2.645-2.251-4.962-4.799-6.439" />
                    </svg>
                    <div class="pl-3 flex items-center gap-2">
                        <div class="text-base font-semibold">Neil Sims</div>
                            <span>VS</span>
                        <div class="text-base font-semibold">Diego Franco</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    semifinal
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> 
                        finalizado
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- btn action table -->
                    <div class="flex items-center gap-1">
                        <svg class="text-red-500 transition duration-75 hover:text-red-600 hover:border-red-600 hover:border-b-2 dark:text-red-400 dark:hover:border-red-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 transition duration-75 hover:text-yellow-600 hover:border-yellow-600 hover:border-b-2 dark:text-yellow-400 dark:hover:border-yellow-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM93,180l71-71,11,11-71,71ZM76,163,65,152l71-71,11,11ZM52,173l15.51,15.51h0L83,204H52ZM192,103,153,64l18.34-18.34,39,39Z">
                            </path>
                        </svg>
                        <a href="#" type="button" data-modal-show="editUserModal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="text-green-500 transition duration-75 hover:text-green-600 hover:border-green-600 hover:border-b-2 dark:text-green-400 dark:hover:border-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M234.49,111.07,90.41,22.94A20,20,0,0,0,60,39.87V216.13a20,20,0,0,0,30.41,16.93l144.08-88.13a19.82,19.82,0,0,0,0-33.86ZM84,208.85V47.15L216.16,128Z"></path>
                            </svg>  
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>