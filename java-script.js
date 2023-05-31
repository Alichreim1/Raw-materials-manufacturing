var sideMenu = document.querySelector("aside");
const closeBtn = document.querySelector("#close-btn");
// var closeBtn = document.getElementById("close-btn");

closeBtn.addEventListener('click', close );

function close(){
    sideMenu.style.display= 'none';
 }

alert();