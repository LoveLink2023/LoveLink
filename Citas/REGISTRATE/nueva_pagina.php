   <!DOCTYPE html>
<html lang="es">
<head>
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
            margin-left: 650px;
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

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .search-box {
            position: relative;
            left:220px;
            bottom: 310px;
        }

        .search-input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            outline: none;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #555;
            cursor: pointer;
        }

        .search-results {
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1;
        }

        .search-results ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .search-results li {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
        }

        .search-results li:last-child {
            border-bottom: none;
        }

        .search-results li:hover {
            background-color: #f9f9f9;
        }

        .image-results {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 200px;
        }

        .image-results img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h3>LoveLink</h3>
            <ul>
                <li><a href="http://localhost/citas/REGISTRATE/INTERFAZ1.php" id="inicioLink"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="#" id="buscadorLink"><i class="fas fa-search"></i> Buscador</a></li>
                <li><a href="#" id="exploradorLink"><i class="fas fa-eye"></i> Explorador</a></li>
                <li><a href="#" id="mensajesLink"><i class="fas fa-envelope"></i> Mensajes</a></li>
                <li><a href="#" id="notificacionesLink"><i class="fas fa-bell"></i> Notificaciones</a></li>
                <li><a href="#" id="crearLink"><i class="fas fa-plus-circle"></i> Crear</a></li>
                <li><a href="http://localhost/citas/REGISTRATE/INTERFAZ1.php" id="perfilLink"><i class="fas fa-user"></i> Perfil</a></li>
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

        <div class="search-container">
        <div class="search-box">
            <input type="text" class="search-input" placeholder="Buscar..." oninput="showSearchResults(this.value)">
            <i class="fas fa-search search-icon"></i>
            <div class="search-results" id="searchResults">
                <ul></ul>
            </div>
        </div>
    </div>

    <div class="image-results" id="imageResults">
    </div>

    <script>
        function getSearchResults(query, callback) {
            // Aquí deberías hacer una solicitud al servidor para obtener resultados reales desde la base de datos.
            // Por ahora, simplemente devolvemos algunas imágenes de ejemplo.
            var dummyImages = ['gato1.jpg', 'gato2.jpg', 'gato3.jpg'];
            callback(dummyImages);
        }

        function showSearchResults(query) {
            var resultsContainer = document.getElementById('searchResults');
            var searchResults = resultsContainer.querySelector('ul');
            var imageResultsContainer = document.getElementById('imageResults');

            // Limpiar resultados anteriores
            searchResults.innerHTML = '';
            imageResultsContainer.innerHTML = '';

            // Simular búsqueda (reemplaza esto con tu lógica de búsqueda real)
            var dummyResults = ['Toros Sebu', 'Perros , Pitbul ', 'Gallos de Pelea', 'Gatos Angora', 'Cerdos de Raza', 'Patos Piquines'];

            // Filtrar resultados por coincidencia de las 5 primeras letras
            var filteredResults = dummyResults.filter(function(result) {
                return result.toLowerCase().startsWith(query.toLowerCase().substring(0, 5));
            });

            // Mostrar resultados de texto
            filteredResults.forEach(function(result) {
                var listItem = document.createElement('li');
                listItem.textContent = result;
                searchResults.appendChild(listItem);
            });

            // Mostrar contenedor de resultados de texto
            resultsContainer.style.display = query.trim() !== '' ? 'block' : 'none';

            // Obtener imágenes reales basadas en la consulta de búsqueda
            getSearchResults(query, function(realImages) {
                // Mostrar imágenes reales
                realImages.forEach(function(image) {
                    var imgElement = document.createElement('img');
                    imgElement.src = image;
                    imgElement.alt = 'Image Result';
                    imgElement.addEventListener('click', function() {
                        // Haz lo que necesites al hacer clic en una imagen (abrir en grande, redireccionar, etc.)
                        alert('Haz clic en la imagen: ' + image);
                    });
                    imageResultsContainer.appendChild(imgElement);
                });
            });
        }
    </script>
</body>
</html>