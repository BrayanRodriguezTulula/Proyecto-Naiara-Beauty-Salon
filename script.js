const cuerpo = document.querySelector("body");
const botonModo=document.querySelector("#btn-tema");

let esDeNoche=false;

function alternarModo(){
    cuerpo.classList.toggle("oscuro");
    esDeNoche=!esDeNoche;
    if (esDeNoche){
        botonModo.textContent="☀️Modo Dia";
    }else{
        botonModo.textContent="🌙Modo Noche";
    }
}
botonModo.addEventListener("click", alternarModo);


const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
  menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);