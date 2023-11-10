<?php
session_start();

if(isset($_SESSION['nombre']) || isset($_COOKIE['nombre'])) {
    header("Location: INTERFAZ1.php");
    exit();
}

if (isset($_POST['nombre']) && isset($_POST['contraseña'])) {
    $username = $_POST['nombre'];
    $password = $_POST['contraseña'];

    if ($username === 'nombre' && $password === 'contraseña') {
        $_SESSION['nombre'] = $username;

        // Si el usuario seleccionó "Recordar sesión", se establece una cookie para un inicio de sesión persistente.
        if ($_POST['remember']) {
            setcookie("nombre", $username, time() + (30 * 24 * 60 * 60), "/");
        }

        header("Location: INTERFAZ1.php");
        exit();
    } else {
        echo "Credenciales incorrectas";
    }
}
?>
