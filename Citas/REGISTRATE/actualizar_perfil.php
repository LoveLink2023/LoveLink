<?php
// actualizar_perfil.php

// Verificar la sesión del usuario o cualquier autenticación necesaria

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Manejar la actualización de la foto de perfil
    if (isset($_FILES['profile_picture'])) {
        $file = $_FILES['profile_picture'];
        // Aquí puedes procesar y guardar la imagen, ya sea en la base de datos o en el servidor.
        // Ejemplo de guardado en el servidor:
        $target_directory = "uploads/"; // Directorio donde se guardará la imagen
        $target_file = $target_directory . basename($file["name"]);
        move_uploaded_file($file["tmp_name"], $target_file);
        // Luego, puedes guardar $target_file en la base de datos o en el perfil del usuario.
    }

    // Manejar la actualización de la descripción
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
        // Aquí puedes actualizar la descripción en la base de datos o el perfil del usuario.
    }

    // Redirigir al usuario a su página de perfil o a donde desees
    header("Location: perfil.php");
    exit();
}
?>
