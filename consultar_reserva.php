<?php
    $conexion = mysqli_connect("localhost", "root", "") or
        die("Problemas en la conexión");

    mysqli_select_db($conexion, "reserva") or
        die("Problemas en la selección de la base de datos"); 

    $nombre = $_REQUEST['nombre'];
    $telefono = $_REQUEST['telefono'];

    $consulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre='$nombre' AND telefono='$telefono'");
    
    if (mysqli_num_rows($consulta) > 0) {
        // Mostrar la información en forma de tabla
        echo "<table border='1'>";
        echo "<tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Fecha de Reserva</th>
                <th>Tipo de Evento</th>
                <th>Tipo de Sopa</th>
                <th>Tipo de Plato</th>
                <!-- Agrega más columnas según tu estructura de base de datos -->
              </tr>";

        while ($row = mysqli_fetch_assoc($consulta)) {
            echo "<tr>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['telefono'] . "</td>
                    <td>" . $row['fechareserva'] . "</td>
                    <td>" . $row['tipoevento'] . "</td>
                    <td>" . $row['tiposopa'] . "</td>
                    <td>" . $row['tipoplat'] . "</td>
                    <!-- Agrega más celdas según tu estructura de base de datos -->
                  </tr>";
        }

        echo "</table>";
    } else {
        echo '<script>alert("No se encontró ninguna reserva con la información proporcionada.");</script>';
    }

    mysqli_close($conexion);
?>