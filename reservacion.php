<?php
    // Imprime el contenido de $_REQUEST para depurar

    $conexion = mysqli_connect("localhost", "root", "") or
        die("Problemas en la conexion");

    mysqli_select_db($conexion, "reserva") or
        die("Problemas en la seleccion de la base de datos"); 

    mysqli_query($conexion, "INSERT INTO clientes (nombre, telefono, fechareserva, tipoevento,tiposopa,tipoplat)
        VALUES ('$_REQUEST[nombre]', '$_REQUEST[telefono]', '$_REQUEST[fechareserva]', '$_REQUEST[tipoevento]','$_REQUEST[tiposopa]','$_REQUEST[tipoplat]')") or
        die("Problemas en el select" . mysqli_error()); 

    mysqli_close($conexion);

    echo '<script>alert("El cliente ha reservado el evento");</script>';
?>