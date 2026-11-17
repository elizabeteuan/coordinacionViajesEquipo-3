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

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coordinacion de Viajes</title>
</head>

<body>

  <header>
    <nav>
      <div>
        <div>
          <img src="assets/puntero(1).png" alt="" />
          <a href="index.php">Control</a>
        </div>
        <span>
          Coordinacion de viajes
        </span>
      </div>
    </nav>
  </header>

  <div>
    <div>

      <aside>
        <h6>MENU</h6>
        <a href="index.php">Inicio</a>
        <a href="viaje.php">Registrar viaje</a>
      </aside>

      <main>
        <header>
          <h1>Ventana principal</h1>
          <p>
            Resumen de coordinacion y planificacion de viajes
          </p>
        </header>

        <!--SECTION 1-->
        <section>
          <div>

            <article>
              <div>
                <div>
                  <p>Viajes programados</p>
                  <p>8</p>
                </div>
              </div>
            </article>

            <article>
              <div>
                <div>
                  <p>En proceso</p>
                  <p>3</p>
                </div>
              </div>
            </article>

            <article>
              <div>
                <div>
                  <p>Viajes realizados</p>
                  <p>15</p>
                </div>
              </div>
            </article>

          </div>
        </section>

        <section>
          <div>
            <div>
              <h2>Viajes recientes</h2>

              <div>
                <table>
                  <thead>
                    <tr>
                      <th>Destino</th>
                      <th>Fecha</th>
                      <th>Estado</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Campeche</td>
                      <td>15/11/2026</td>
                      <td>Juan Perez</td>
                      <td>Programado</td>
                    </tr>

                    <tr>
                      <td>Merida</td>
                      <td>18/11/2026</td>
                      <td>Maria Lopez</td>
                      <td>En proceso</td>
                    </tr>

                    <tr>
                      <td>Ciudad del Carmen</td>
                      <td>10/11/2026</td>
                      <td>Carlos Ruiz</td>
                      <td>Realizado</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

      </main>
    </div>
  </div>

  <footer>
    Coordinacion de Viajes | Sistema de Gestion
  </footer>

</body>

</html>