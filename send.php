<?php
include("conexion.php");

if (isset($_POST['send'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // Validar el formato del correo electrónico
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Formato de correo electrónico no válido.";
            exit;
        }

        // Preparar la consulta
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        // Verificar si la preparación fue exitosa
        if ($stmt) {
            // Vincular parámetros
            mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $message);
            // Ejecutar la consulta
            if (mysqli_stmt_execute($stmt)) {
                echo "Datos guardados correctamente.";
            } else {
                echo "Error al guardar los datos: " . mysqli_error($conex);
            }
            // Cerrar la declaración
            mysqli_stmt_close($stmt);
        } else {
            echo "Error en la preparación de la consulta: " . mysqli_error($conex);
        }
    } else {
        echo "Por favor complete todos los campos.";
    }
}
?>