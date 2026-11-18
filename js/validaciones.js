// Validar formulario de login
function validarLogin() {
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;

    if (usuario.trim() == "" || password.trim() == "") {
        alert("Por favor llena todos los campos");
        return false;
    }

    if (password.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres");
        return false;
    }

    return true;
}

// Validar formulario de registro
function validarRegistro() {
    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var telefono = document.getElementById("telefono").value;
    var tipoUsuario = document.getElementById("tipoUsuario").value;

    if (nombre.trim() == "" || correo.trim() == "" || telefono.trim() == "" || tipoUsuario == "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    // Validar que el correo tenga @ y punto
    if (correo.indexOf("@") == -1 || correo.indexOf(".") == -1) {
        alert("Ingresa un correo válido");
        return false;
    }

    // Validar que el teléfono tenga 10 números
    if (isNaN(telefono) || telefono.length != 10) {
        alert("El teléfono debe tener 10 dígitos numéricos");
        return false;
    }

    return true;
}