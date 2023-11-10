<!DOCTYPE html>
<html>
<head>
    <title>M- LoveLink</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family:  sans-serif;
            
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 1px auto;
            padding: 1px;
           
            border-radius: 20px;
        }

        h1 {
            font-family:  sans-serif;
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .profile-picture {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
           
            
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .change-profile-icon {
            background: #3498db;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            position: absolute;
            bottom: -10px;
            right: -10px;
            cursor: pointer;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .change-profile-icon:hover {
            background: #2980b9;
        }

        p {
            text-align: center;
            color: #777;
            font-size: 16px;
            line-height: 1.6;
        }

        .profile-options {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .profile-options button {
            background: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 14px;
            text-transform: uppercase;
        }

        .profile-options button:hover {
            background: #2980b9;
        }

        .iframe-container {
            display: none;
            position: fixed;
            top: 50px;
            left: 0;
            width: 100%;
            height: calc(100% - 50px);
            background: rgba(255, 255, 255, 0.9);
            z-index: 999;
        }

        .iframe-content {
            width: 80%;
            height: 80%;
            margin: 50px auto;
        }

        .iframe-content iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .close-iframe {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
        }
    </style>
</head>

 <body>
   <div class="main-content">
    <h1>Mi Perfil</h1>
    <div class="profile-picture">
       
        <div class="change-profile-icon" onclick="loadEditPhoto()">
            <i class="fas fa-camera"></i>
        </div>
        <img id="displayImage" src="" alt="Imagen del perfil">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed velit in arcu gravida interdum.</p>
    <div class="profile-options">
        <button onclick="loadEditPhoto()">Editar Foto</button>
        <a href="http://localhost/citas/REGISTRATE/editarfoto.php">
            <button onclick="saveChanges()">Editar Perfil</button>
        </a>
    </div>
    <!-- Puedes añadir más información del perfil aquí -->
</div>

<!-- Contenedor del iframe -->
<div class="iframe-container" id="iframeContainer">
    <div class="iframe-content">
        <span class="close-iframe" onclick="closeIframe()">&times;</span>
        <iframe id="dynamicIframe" src="" frameborder="0"></iframe>
    </div>
</div>

<script>
    function loadEditPhoto(input) {
        // Aquí se carga la imagen seleccionada por el usuario
        var image = document.getElementById('displayImage');
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result; // Asigna la imagen al src de la etiqueta img
            };

            reader.readAsDataURL(input.files[0]); // Lee el archivo como una URL de datos
        }
    }

    function saveChanges() {
        var profilePic = document.getElementById('profilePic').files[0];
        var nickname = document.getElementById('nickname').value;
        var secondName = document.getElementById('secondName').value;
        var description = document.getElementById('description').value;

        if (nickname.trim() === '' || secondName.trim() === '' || description.trim() === '') {
            alert('Por favor, completa todos los campos.');
            return;
        }

        if (profilePic) {
            var imageUrl = URL.createObjectURL(profilePic);
            document.getElementById('displayImage').src = imageUrl;
            document.getElementById('profilePicture').style.backgroundImage = 'url(' + imageUrl + ')';
        } else {
            alert('Por favor, elige una imagen');
        }
    }
</script>





    </script>
</body>

    
</html>