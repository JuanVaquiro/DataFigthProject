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
         <div class="flex items-center justify-center rounded w-11/12 bg-gray-50 dark:bg-gray-800">
            <canvas id="myChart2"></canvas>
         </div>
         <div  class="flex items-center justify-center rounded w-11/12 bg-gray-50 dark:bg-gray-800">
            <canvas id="myChart3"></canvas>
         </div>
         <div class="flex items-center justify-center rounded w-11/12 bg-gray-50 dark:bg-gray-800">
            <canvas id="myChart4"></canvas>
         </div>
         <div class="flex items-center justify-center rounded w-11/12 bg-gray-50 dark:bg-gray-800">
            <canvas id="myChart5"></canvas>
         </div>
      </div>
   </div>
</div>
<script src="./../../src/js/chart/chart.umd.js"></script>
<script type="module" src="./../../src/js/chart/charting.js"></script>

 