<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<div class="p-4 sm:ml-64 dark:bg-gray-900">
   <div class="p-4 rounded-lg mt-14">
      <!-- <div class="flex items-center justify-center w-full mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <canvas id="myChart"></canvas>
      </div> -->
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="tremor-Card-root relative w-full text-left ring-1 shadow border-blue-500 ring-gray-200 p-6 rounded-lg max-w-lg dark:bg-gray-800 dark:ring-gray-700">
            <canvas id="myChart2"></canvas>
         </div>
         <div  class="tremor-Card-root relative w-full text-left ring-1 shadow border-blue-500 ring-gray-200 p-6 rounded-lg max-w-lg dark:bg-gray-800 dark:ring-gray-700">
            <canvas id="myChart3"></canvas>
         </div>
         <div class="tremor-Card-root relative w-full text-left ring-1 shadow border-blue-500 ring-gray-200 p-6 rounded-lg max-w-lg dark:bg-gray-800 dark:ring-gray-700">
            <canvas id="myChart4"></canvas>
         </div>
         <div class="tremor-Card-root relative w-full text-left ring-1 shadow border-blue-500 ring-gray-200 p-6 rounded-lg max-w-lg dark:bg-gray-800 dark:ring-gray-700">
            <canvas id="myChart5"></canvas>
         </div>
      </div>
   </div>
</div>
<script src="./../../src/js/chart/chart.umd.js"></script>
<script type="module" src="./../../src/js/chart/charting.js"></script>

 