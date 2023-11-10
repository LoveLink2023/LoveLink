<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - LoveLink</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: sans-serif;
            background: white;
        }

        .container {
            display: flex;
            height: 100%;
            margin-top: 20px;
            margin-left: 25px;
        }

        .sidebar {
            width: 200px;
            background: white;
            color: black;
            top: 10px;
            height: 66%;
            position: fixed;
            border-right: 1px solid #ccc;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .sidebar ul li {
            margin-bottom: auto;
            padding: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: black;
            display: block;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background: #ECEBEB;
            border-radius: 3px;
        }

        .main-content {
            flex: 1;
            padding: 15px;
            background: white;
            font-family: sans-serif;
            font-size: 16px;
            color: #333;
            margin-left: 400px;
        }

        h1 {
            font-family: 'Lobster', cursive;
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .sidebar h3 {
            color: #14CFDF;
            margin-left: 13px;
            font-family: 'Dancing Script', cursive;
            font-size: 40px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid white;
            width: 30%;
            align-items: center;
            border-radius: 5px;
            color: black;
        }

        .modal-content ul li {
            margin-bottom: auto;
            padding: 10px;
        }

        .modal-content ul li a {
            text-decoration: none;
            color: black;
            display: block;
            transition: background 0.3s;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .search-bar {
            position: relative;
            margin-top: 10px;
            margin-right: 10px;
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 5px;
        }

        .search-bar button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-results {
            position: absolute;
            top: 40px;
            right: 10px;
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: none;
            padding: 10px;
            z-index: 2;
        }

        .search-results ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .search-results li {
            padding: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-results li:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h3>LoveLink</h3>
            <ul>
                <li><a href="http://localhost/citas/REGISTRATE/INTERFAZ1.php" id="inicioLink"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="nueva_pagina.php" id="buscadorLink"><i class="fas fa-search"></i> Buscador</a></li>
                <li><a href="#" id="exploradorLink"><i class="fas fa-eye"></i> Explorador</a></li>
                <li><a href="#" id="mensajesLink"><i class="fas fa-envelope"></i> Mensajes</a></li>
                <li><a href="#" id="notificacionesLink"><i class="fas fa-bell"></i> Notificaciones</a></li>
                <li><a href="#" id="crearLink"><i class="fas fa-plus-circle"></i> Crear</a></li>
                <li><a href="editarfoto.php" id="perfilLink"><i class="fas fa-user"></i> Perfil</a></li>

                <li class="dropdown">
                    <a href="#"><i class="fas fa-ellipsis-h"></i> Más</a>
                    <div class="dropdown-content">
                        <a href="#" onclick="openModal()">Configuración</a>
                        <a href="#">Cambiar de cuenta</a>
                        <a href="#" onclick="confirmLogout()">Salir</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Bienvenido a la Aplicación de Citas</h1>
            <h4>    </h4>
            <div id="contentArea">
                <!-- Aquí se cargará dinámicamente el contenido -->
            </div>
        </div>
    </div>

    <div id="configModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <ul>
                <li><a href="cuentas_perfiles.php"><i class="fas fa-user"></i> Cuentas y Perfiles</a></li>
                <li><a href="datos_personales.php"><i class="fas fa-id-card"></i> Datos Personales</a></li>
                <li><a href="contrasena_seguridad.php"><i class="fas fa-lock"></i> Contraseña y Seguridad</a></li>
            </ul>
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Buscar..." oninput="showSearchResults(this.value)" />
        <button type="button">
            <i class="fas fa-search"></i>
        </button>
        <div class="search-results" id="searchResults">
            <!-- Aquí se mostrarán los resultados de la búsqueda -->
            <ul>
                <li>Resultado 1</li>
                <li>Resultado 2</li>
                <li>Resultado 3</li>
                <!-- Agrega más resultados según sea necesario -->
            </ul>
        </div>
    </div>

    <script>
        function confirmLogout() {
            var confirmation = confirm("¿Estás seguro de que quieres salir?");
            if (confirmation) {
                window.location.href = "cerrar_sesion.php";
                alert("Has cerrado la sesión.");
            }
        }

        function openModal() {
            var modal = document.getElementById("configModal");
            modal.style.display = "block";
        }

        function closeModal() {
            var modal = document.getElementById("configModal");
            modal.style.display = "none";
        }


    function showSearchResultsContainer() {
        fetch('nueva_pagina.php')
            .then(response => response.text())
            .then(data => {
                var searchResultsContainer = document.getElementById('searchResults');
                searchResultsContainer.innerHTML = data;
                searchResultsContainer.style.display = 'block';
            })
            .catch(error => console.error('Error:', error));
    }


        

        function showSearchResults(query) {
            //
// Lógica para buscar y mostrar resultados aquí
            // Puedes usar AJAX para obtener resultados del servidor

            // En este ejemplo, simplemente mostramos la ventana de resultados
            var resultsContainer = document.getElementById('searchResults');
            if (query.trim() !== '') {
                resultsContainer.style.display = 'block';
            } else {
                resultsContainer.style.display = 'none';
            }
        }
    </script>
</body>
</html>