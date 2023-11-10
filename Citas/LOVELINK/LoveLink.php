<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cargando ... </title>
  <style>
    /* Estilos CSS para la página emergente */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente para destacar la imagen */
    }

    #popup {
      opacity: 0;
      transition: opacity 5s; /* Establece la transición con duración de 5 segundos */
      z-index: 999; /* Asegura que el popup esté en la capa superior */
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body>
  <div id="popup">
    <img src="http://localhost/citas/REGISTRATE/images/Logo1.png" alt="Logo" width="300" height="300"> <!-- Reemplaza 'Logo1.png' con la ruta de tu imagen -->
  </div>

  <script>
    window.addEventListener('load', function() {
      const popup = document.getElementById('popup');
      popup.style.opacity = 1; // Hace visible la imagen del popup (la transición inicia)

      setTimeout(function() {
        window.location.href = "http://localhost/citas/REGISTRATE/iniciosecion.php"; // Reemplaza 'pagina_principal.html' por la URL de tu página principal
      }, 5000); // Redirección después de 5 segundos (5000 milisegundos)
    });
  </script>
</body>
</html>

