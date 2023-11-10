       <!DOCTYPE html>
<html>
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

            //  Estos estilos son para el formulario 
        }
         #profileForm {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #2c3e50;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    textarea,
    button {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    input[type="file"] {
        margin-bottom: 20px;
    }

   
    #contentArea {
            display: flex;
            align-items: center;
        }

        #profileForm {
            padding: 20px;
        }

        #profilePic {
            margin-right: 20px;
        }

        #description {
            width: 300px;
            height: 100px;
        }

       
        #displayImage {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            position: relative; /* Añadir posición relativa al contenedor */
            left: 420px; /* Mover la imagen hacia la izquierda */
            top: 40px;
        }
        .contenido_formulario{
            position: absolute; 
            left: 420px;
            top: 230px;
        }
        button {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
        .imagenencargada{
            padding-top: 50px;
        }

</style>
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
       
  <div>
          
        </div>
         <img id="displayImage" src="" alt="Imagen del perfil">
        <div class="main-content">
           


<div class="contenido_formulario">
    <h3>Información de tu Contenido</h3>
    <p id="savedNickname">Nickname: </p>
    <p id="savedSecondName">Segundo Nombre o Apodo: </p>
    <p id="savedDescription">Descripción: </p>
</div>


</div>


       <div id="contentArea">
         
        <form id="profileForm">
            <h2>Editar Perfil</h2>

            <label for="nickname">Dirección:</label>
            <input type="text" id="nickname" style="width: 300px;">
            <br><br>

            <label for="secondName">Segundo nombre o Apodo:</label>
            <input type="text" id="secondName" style="width: 300px;">
            <br><br>

            <label for="description">Descripción:</label>
            <textarea id="description" style="width: 300px; height: 100px;"></textarea>
            <br><br>
              <input type="file" id="profilePic" class="imagencargada" accept="image/*"> <!-- Campo para cargar la foto -->

            <button type="button" onclick="saveChanges()">Guardar Cambios</button>
        </form>

      
    </div>
<script>
    window.onload = function() {
    var savedImage = localStorage.getItem('savedProfileImage');
    if (savedImage) {
        document.getElementById('displayImage').src = savedImage;
    }

    var nicknameInput = document.getElementById('nickname');
    var secondNameInput = document.getElementById('secondName');
    var descriptionInput = document.getElementById('description');

    // Recuperar los valores almacenados para los campos de texto
    var savedNickname = localStorage.getItem('savedNickname');
    var savedSecondName = localStorage.getItem('savedSecondName');
    var savedDescription = localStorage.getItem('savedDescription');

    // Asignar los valores a los campos de texto si están disponibles
    if (savedNickname) {
        nicknameInput.value = savedNickname;
        document.getElementById('savedNickname').innerText = 'Whatsap: ' + savedNickname;
    }

    if (savedSecondName) {
        secondNameInput.value = savedSecondName;
        document.getElementById('savedSecondName').innerText = 'Segundo Nombre o Apodo: ' + savedSecondName;
    }

    if (savedDescription) {
        descriptionInput.value = savedDescription;
        document.getElementById('savedDescription').innerText = 'Descripción: ' + savedDescription;
    }

    // Agregar escuchadores de eventos input para cada campo
    nicknameInput.addEventListener('input', saveNickname);
    secondNameInput.addEventListener('input', saveSecondName);
    descriptionInput.addEventListener('input', saveDescription);
};

function saveNickname() {
    var nickname = document.getElementById('nickname').value;
    localStorage.setItem('savedNickname', nickname);
    document.getElementById('savedNickname').innerText = 'Whatsap: ' + nickname;
}

function saveSecondName() {
    var secondName = document.getElementById('secondName').value;
    localStorage.setItem('savedSecondName', secondName);
    document.getElementById('savedSecondName').innerText = 'Segundo Nombre o Apodo: ' + secondName;
}

function saveDescription() {
    var description = document.getElementById('description').value;
    localStorage.setItem('savedDescription', description);
    document.getElementById('savedDescription').innerText = 'Descripción: ' + description;
}

function saveChanges() {
    var profilePic = document.getElementById('profilePic').files[0];
    if (profilePic) {
        var imageUrl = URL.createObjectURL(profilePic);
        document.getElementById('displayImage').src = imageUrl;
        localStorage.setItem('savedProfileImage', imageUrl); // Guardar la imagen en localStorage
    } else {
        alert('Por favor, elige una imagen');
    }
}
</script>
</body>
</html>