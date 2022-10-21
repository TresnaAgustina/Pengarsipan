
const toggle = document.querySelector('.toggle');
const sidebar = document.querySelector('.sidebar');
const button = document.querySelector('.btn_logout');

// // for open nav__menu
toggle.onclick = function () {
      sidebar.classList.toggle("open");
      button.classList.toggle("active");
}


// console.log('test');