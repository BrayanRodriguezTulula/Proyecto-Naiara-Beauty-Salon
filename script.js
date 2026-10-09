const cuerpo = document.querySelector("body");
const botonModo=document.querySelector("#btn-tema");

let esDeNoche=false;

function alternarModo(){
    cuerpo.classList.toggle("oscuro");
    esDeNoche=!esDeNoche;
    if (esDeNoche){
        botonModo.textContent="Modo Dia";
    }else{
        botonModo.textContent="Modo Noche";
    }
}
botonModo.addEventListener("click", alternarModo);
