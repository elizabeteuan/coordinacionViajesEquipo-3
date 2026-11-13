<?php
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario  = "root";
$password = ""; // Si usas Ubuntu y pusiste clave en MySQL, escríbela aquí
$baseDatos = "coordinacionViajes";

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $password, $baseDatos);

// Verificar si hubo algún error al conectar
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configurar caracteres a UTF-8 para que acepte acentos y la letra ñ
$conexion->set_charset("utf8mb4");
?>