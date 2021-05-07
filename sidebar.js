const menuOut = document.getElementById('sidebar-open')
const sidebar = document.getElementById('sidebar-main')
const menuIn = document.getElementById('sidebar-close')

menuOut.addEventListener("click", function() {
  sidebar.style.display = "block";
  menuOut.style.display = "none";
  menuIn.style.display = "block";
})

menuIn.addEventListener("click", function() {
  sidebar.style.display = "none";
  menuOut.style.display = "block";
  menuIn.style.display = "none";
})