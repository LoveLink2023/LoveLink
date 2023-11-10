<?php
include_once("CONEXION.php");

class usuarios {
    public $nombre;
    public $correo;
    public $contraseña;
    public $género;

    public function __construct($nombre, $correo, $contraseña, $género) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->género = $género;
    }


    public function registrar() {
        $cn = conectar();
        $sql = "INSERT INTO usuarios VALUES ('', '$this->nombre', '$this->correo', '$this->contraseña', '$this->género')";
        $ejecutar_sql = mysqli_query($cn, $sql);
        if (mysqli_affected_rows($cn)) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        $cn = conectar();
        $sql = "SELECT * FROM usuarios";
        $ejecutar_sql = mysqli_query($cn, $sql);
        return $ejecutar_sql;
    }

    public function eliminar($id) {
        $cn = conectar();
        $sql = "DELETE FROM usuarios WHERE id = '$id'";
        $ejecutar_sql = mysqli_query($cn, $sql);
        if (mysqli_affected_rows($cn)) {
            return true;
        } else {
            return false;
        }
    }

   public function iniciarSesion($nombre, $contraseña) {
        $cn = conectar();
        $nombre = mysqli_real_escape_string($cn, $nombre);
        $contraseña = mysqli_real_escape_string($cn, $contraseña);

        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contraseña = '$contraseña'";
        $resultado = mysqli_query($cn, $sql);

        if ($row = mysqli_fetch_assoc($resultado)) {
            return true; // Inicio de sesión exitoso
        } else {
            return false; // Credenciales incorrectas
        }
    }
}

// Verificar si se envió el formulario de inicio de sesión
if (isset($_POST['btniniciar'])) {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    // Crear una instancia de usuarios con los parámetros necesarios
    $c1 = new usuarios(null, $nombre, $contraseña, null);

    if ($c1->iniciarSesion($nombre, $contraseña)) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso. Bienvenido, " . $nombre;
        // Aquí podrías redirigir al usuario a su área personal, por ejemplo, con header('Location: area_personal.php');
    } else {
        // Credenciales incorrectas
         echo "<script>
        Swal.fire({
            title: '¡Datos no validos!',
            text: 'Verifica tus credenciales.',
            icon: 'success',
            showCancelButton: false,
            confirmButtonText: 'Continuar'
        });
    </script>";
    }
}
?>