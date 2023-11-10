<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inicio de sesión - Instagram</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #fafafa;
    }

    .container {
      text-align: center;
    }

    .login-container {
      background-color: white;
      border: 1px solid #dbdbdb;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 350px;
    }

    .logo {
      width: 200px;
      margin-bottom: 20px;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #dbdbdb;
      border-radius: 3px;
      font-family: sans-serif;
    }

    .login-button {
      width: 100%;
      padding: 10px;
      background-color: #3897f0;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .login-button:hover {
      background-color: #3897f0;
    }

    .forgot-password,
    .signup-link {
      margin-top: 15px;
    }

    .signup-link a {
      text-decoration: none;
      color: #3897f0;
    }

    .password-toggle {
      border: none;
      background: none;
      color: #777;
      position: absolute;
      top: 18px;
      right: 15px;
      cursor: pointer;
      vertical-align: middle; /* Alinea verticalmente con el texto */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <img src="images/logo1.png" class="logo">
      <form method="post" action="procesar_login.php">
        <input type="text" name="nombre" placeholder="Nombre de usuario" class="input-field">
        <div style="position: relative;">
          <input type="password" name="contraseña" placeholder="Contraseña" class="input-field" id="passwordField">
          <button type="button" class="password-toggle" onclick="togglePasswordField()">👁️</button>
        </div>
        <input type="checkbox" name="remember" value="1"> Recordar sesión<br>
        <button type="submit" name="btniniciar" class="login-button">Iniciar sesión</button>
      </form>
      <p class="forgot-password">¿Olvidaste tu contraseña?</p>
      <p class="signup-link">¿No tienes una cuenta? <a href="Formularios.php">Regístrate</a></p>
    </div>
  </div>
  <script>
    function togglePasswordField() {
      const passwordField = document.getElementById("passwordField");
      if (passwordField.type === "password") {
        passwordField.type = "text"; // Cambia el campo a texto
      } else {
        passwordField.type = "password"; // Cambia el campo a contraseña
      }
    }
  </script>
</body>
</html>
