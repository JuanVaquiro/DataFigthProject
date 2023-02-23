const dropdown = document.querySelector('.dropdown');
const drop = document.querySelector('#drop');
const menu = document.querySelector('.menu');

drop.addEventListener('click', function() {
  menu.classList.toggle('show');
});
