
const toggle = document.querySelector('.toggle');
const sidebar = document.querySelector('.sidebar');
const button = document.querySelector('.btn_logout');

// // for open nav__menu
toggle.onclick = function () {
      sidebar.classList.toggle("open");
      button.classList.toggle("active");
}

//  when user click outside the sidebar -> close sidebar
document.addEventListener('mouseup', function(e) {
      var box = document.getElementById('sidebar');
      if (!box.contains(e.target)) {
      button.classList.remove("active");
      box.classList.remove("open");
      }
  });

// console.log('test');