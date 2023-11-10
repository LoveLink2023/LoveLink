<?php
include_once("Datos.php");
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<head>
    <link rel="shortcut icon" href="REGISTRATE/images/LogoApkCitas.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate en LoveLink</title>
    <style>
      body {
  margin: 0;
  padding: 0;
  font-family:  sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #fafafa;
}
.container {
  text-align: center;
}

      


.signup-container {
  background-color: white;
  border: 1px solid #dbdbdb;
  padding: 40px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 300px;
    margin: 50px 0; 
}

.logo {
  width: 150px;
  margin-bottom: 10px;
}

.signup-text {
  margin-bottom: 10px;
  color: #999;
}

.fb-button {
  width: 100%;
  padding: 10px;
  background-color: #385185;
  color: white;
  border: none;
  border-radius: 3px;
  margin-bottom: 10px;
  cursor: pointer;
}
.or-divider {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.line {
  border-top: 1px solid #dbdbdb;
  flex: 1;
  margin: 0 3px;
}

.signup-form {
  text-align: left;
   font-size: 14px;

}


 .input-field {
        width: 100%;
        display: block; /* Coloca cada campo en una línea nueva */
        margin: 10px 0;
        border: 1px solid #dbdbdb;
        border-radius: 3px;
        padding: 8px;
        font-size: 14px;
        font-family: sans-serif;
        box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
    }
 .input-field1 {
        width: 100%;
        display: block; /* Coloca cada campo en una línea nueva */
        margin: 10px 0;
        border: 1px solid #dbdbdb;
        border-radius: 3px;
        padding: 8px;
        font-size: 14px;
        font-family: sans-serif;
        box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
        background-color: #385185;
        color: white;
    }


.signup-button {
  width: 100%;
  padding: 10px;
  background-color:;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;

}

.signup-button:hover {
  background-color: #3897f0;
}

.terms {
  font-size: 12px;
  color: #999;
  margin-top: 15px;
}

/* Define una regla de CSS para la transición */
        .transicion {
            opacity: 0; /* Inicialmente, el elemento estará invisible */
            transition: opacity 1s; /* Duración de la transición y propiedad afectada */
        }

        /* Cuando la clase 'transicion' está en uso, el elemento se volverá visible */
        .transicion.active {
            opacity: 1;
        }


    </style>
</head>
<body>
     </form>
 <div class="transicion">
  

     <form method="post" action="">
       <div class="container">
    <div class="signup-container">
        <img src="images/logo1.png" alt="Instagram Logo" class="logo">
      <p class="signup-text">Regístrate para ver fotos y videos de tus amigos.</p>


     
       <form class="signup-form">
       
        <input type="text" id="nombre" name="txtnombre" placeholder="Nombre y Apellidos" class="input-field">

       
      


       
        <input type="email" id="correo" name="correo" placeholder="Crea una dirección de Gmail " class="input-field">

        
        <input type="password" id="contrasena" name="contrasena" placeholder="Crea Contraseña" class="input-field">

        
        
        <select id="genero" name="genero" required class="input-field">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>

        
    

        <button type="submit" name="btnregistrar" class="input-field1">Registrarse</button>
         <a href="iniciosecion.php" class="inicio ">
        <button type="button" class="input-field1">Iniciar Sesión</button>
    
  </div>

   
</a>
</form>
    <!-- Agrega un poco de JavaScript para activar la animación después de cargar la página -->
    <script>
        window.addEventListener('load', function() {
            const elemento = document.querySelector('.transicion');
            elemento.classList.add('active');
        });
    </script>
</body>
</html>

<?php
include_once("Datos.php");

if (isset($_POST['btnregistrar'])) {
    $nom = $_POST['txtnombre'];
    $co = $_POST['correo'];
    $cont = $_POST['contrasena'];
    $gen = $_POST['genero'];

    if (empty($nom) || empty($co) || empty($cont) || empty($gen)) {
        echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'Por favor, completa todos los campos.',
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'OK'
            });
        </script>";
    } else {
        $c1 = new usuarios($nom, $co, $cont, $gen);
        if ($c1->registrar()) {
            echo "<script>
                Swal.fire({
                    title: '¡Registro Exitoso!',
                    text: 'Gracias por tu Registro a LoveLink.',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'Continuar'
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Ha ocurrido un error. Por favor, intenta nuevamente.',
                    icon: 'error',
                    showCancelButton: false,
                    confirmButtonText: 'OK'
                });
            </script>";
        }
    }
}
?>


  
