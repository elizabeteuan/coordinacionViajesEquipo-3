<?php
include("../config/conexion.php");

$mensaje = "";

// Procesar el formulario cuando se envía por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $tipo = trim($_POST['tipo']);

    if (!empty($nombre) && !empty($correo) && !empty($tipo)) {
        try {
            $sql = "INSERT INTO usuarios (nombre, correo, tipo) VALUES (:nombre, :correo, :tipo)";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([
                ':nombre' => $nombre,
                ':correo' => $correo,
                ':tipo' => $tipo
            ]);
            $mensaje = "¡Registro guardado correctamente!";
        } catch (PDOException $e) {
            $mensaje = "Error al registrar: " . $e->getMessage();
        }
    } else {
        $mensaje = "Por favor, completa todos los campos obligatorios.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Coordinación de Viajes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="../js/validaciones.js" defer></script>
</head>
<body class="container mt-5">
    <h2 class="mb-4">Registro al Sistema de Coordinación de Viajes</h2>

    <?php if (!empty($mensaje)): ?>
        <div class="alert alert-info"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <form action="index.php" method="POST" onsubmit="return validarFormulario();" class="needs-validation">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de usuario:</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="">Selecciona...</option>
                <option value="Docente">Docente</option>
                <option value="Alumno">Alumno</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</body>
</html>

