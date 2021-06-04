const menuOut = document.getElementById('sidebar-open');
const sidebar = document.querySelector('header');
const main = document.querySelector('main');
const width = 128;

menuOut.addEventListener("click", function() {
    sidebar.style.left = 0;
  menuOut.style.opacity = 0;
  menuOut.style.left = width + 'px';
  main.style.opacity = 0.4;
  setTimeout( function() {
    menuOut.style.display = 'none';
    main.addEventListener('click', closeMenu);
  }, 1000);
})


function closeMenu(e) {
  e.preventDefault();
  
  menuOut.style.display = 'block';
  
  setTimeout( function() {
    sidebar.style.left = 0 - width + 'px';
    main.style.opacity = 1;
    menuOut.style.left = 0;
    menuOut.style.opacity = 1;
    main.removeEventListener('click', closeMenu);
  }, 10);
  
}

window.addEventListener('resize', function() {
  if (window.innerWidth > 576) {
  sidebar.style='';
  menuOut.style='';
  main.style='';
  }
})