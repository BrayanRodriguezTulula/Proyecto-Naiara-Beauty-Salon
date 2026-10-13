const botonConfirmar = document.querySelector("#btn-confirmar");
const mensaje = document.querySelector("#mensaje");

function confirmarPedido() {
    mensaje.textContent = "Pedido confirmado - te atiende Brayan Rodriguez Tulula";
    mensaje.classList.remove("oculto");
}
botonConfirmar.addEventListener("click", confirmarPedido);