const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeNoche = false;

function alternarModo() {
    cuerpo.classList.toggle("oscuro");
    esDeNoche = !esDeNoche;
    if (esDeNoche) {
        botonModo.textContent = "☀️Modo Dia";
    } else {
        botonModo.textContent = "🌙Modo Noche";
    }
}
botonModo.addEventListener("click", alternarModo);


const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
    menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);




const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#error-contacto");

function revisarContacto(event){

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if(nombre === ""){
        event.preventDefault();
        avisoContacto.textContent = "¡Agregue su nombre completo al formulario!";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    }else if (correo.includes("@")=== false) {
        event.preventDefault();
        avisoContacto.textContent = "¡ERROR! Agregue un correo valido.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    }
}
formularioContacto.addEventListener("submit", revisarContacto);