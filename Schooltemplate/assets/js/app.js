//Sidenavbar
function closeSidemenu() {
  document.getElementById("sidemenu").classList.add("hidden");
}
function openSidemenu() {
  console.log("closeSidemenu");
  var sidemenu = document.getElementById("sidemenu");
  sidemenu.classList.remove("hidden");
  var sidemenuOpenButton = document.getElementById("openSidemenuButton");
}

// Date
var d = new Date();
d.setFullYear(2020);
document.getElementById('orderdate').innerHTML = d