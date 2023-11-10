
<?php
include_once("Datos.php");

if (isset($_POST['btniniciar'])) {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    if (empty($nombre) || empty($contraseña)) {
        echo '<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #f8d7da; color: #721c24; padding: 15px; border: 1px solid #f5c6cb; border-radius: 5px; text-align: center;">Por favor, completa todos los campos.</div>';
        echo '<script>setTimeout(function(){window.location.href = "iniciosecion.php";}, 3000);</script>';
    } else {
        $c1 = new usuarios(null, $nombre, $contraseña, null);
        if ($c1->iniciarSesion($nombre, $contraseña)) {
            header('Location: INTERFAZ1.php');
        } else {
            echo '<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff3cd; color: #856404; padding: 15px; border: 1px solid #ffeeba; border-radius: 5px; text-align: center;">Inicio de sesión fallido. Verifica tus credenciales.</div>';
            echo '<script>setTimeout(function(){window.location.href = "iniciosecion.php";}, 3000);</script>';
        }
    }
}
?>

<?php
// Verificar las credenciales de inicio de sesión
if ($_POST['nombre'] === 'usuario' && $_POST['contraseña'] === 'contraseña') {
    if (isset($_POST['remember']) && $_POST['remember'] == '1') {
        // Establecer una cookie que expire en 30 días (2592000 segundos)
        setcookie("usuario", $_POST['nombre'], time() + 2592000, "/");
    }

    // Redirigir al usuario a la página principal
    header("Location: INTERFAZ1.php");
    exit();
} else {
    echo "Credenciales incorrectas";
}
?>
