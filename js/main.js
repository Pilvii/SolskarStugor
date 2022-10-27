"use strict";

//Variabler
let menubtnEL = document.getElementById("menu-btn");
let menuEL = document.getElementById("navmenu");
let desktop = window.matchMedia("(min-width: 1200px)")
window.addEventListener("resize", function(){
    if (desktop.matches) {
        menuEL.style.display = "block";

      } else {
        menuEL.style.display = "block";
        menubtnEL.setAttribute("aria-expanded", "false");
        togglemenu();
      }
})


//funktioner
function togglemenu(){

    if(menuEL.style.display === "none"){
        //öppna menyn
        menuEL.style.display = "block";
        menubtnEL.setAttribute("aria-expanded", "true");
        menubtnEL.innerHTML = '<i class="fa-solid fa-close"></i>';

    }
    else if(menuEL.style.display === "block"){
        //stäng menyn
        menuEL.style.display = "none";
        menubtnEL.setAttribute("aria-expanded", "false");
        menubtnEL.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }
}


