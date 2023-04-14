<?php 
require_once('./../../views/Components/Navbar.php');

require_once('./../../views/Components/Sidebar.php');
?>

<div class="p-4 sm:ml-64 h-screen dark:bg-gray-900">
   <div class="p-4 rounded-lg mt-14">
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <canvas id="myChart"></canvas>
      </div>
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
         <canvas id="myChart2"></canvas>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
         <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>
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
<script src="./../../src/js/chart/chart.umd.js"></script>
<script type="module" src="./../../src/js/chart/acquisitions.js"></script>

 