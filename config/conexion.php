<?php
// Configuración de la conexión a la base de datos con PDO
$host = "localhost";
$dbname = "coordinacion_viajes";
$username = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Habilitar el modo de errores de PDO para depuración
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa"; // Descomentar solo para pruebas
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
