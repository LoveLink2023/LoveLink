<?php
// Iniciar o reanudar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la sesión completamente, es necesario borrar la cookie de sesión.
// Nota: ¡Esto destruirá la sesión y no solo los datos de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cerrar Sesión</title>
    <script>
        function confirmLogout() {
            var confirmation = confirm("¿Estás seguro de que quieres cerrar sesión?");
            if (confirmation) {
                window.location.href = 'iniciosecion.php'; // Redirige a la página de inicio de sesión
            }
        }
    </script>
</head>
<body>
    <h1>Cerrar Sesión</h1>
    <p>Haz clic en el botón para cerrar la sesión.</p>
    <button onclick="confirmLogout()">Cerrar Sesión</button>
</body>
</html>
