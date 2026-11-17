Js
function validarFormulario() {
    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let tipo = document.getElementById("tipo").value;

    if (nombre === "" || correo === "" || tipo === "") {
        alert("Todos los campos son obligatorios para continuar.");
        return false;
    }
    return true;
}

