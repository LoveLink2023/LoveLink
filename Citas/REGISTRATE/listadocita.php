<?php
include_once("Datos.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado</title>
    <style>
        body {
            font-family:  sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            
        }
        .titulo {
           max-width: 100%; /* Asegura que el div no sea más ancho que su contenedor */
    text-align: center; /* Centra la imagen horizontalmente en el div */
    background: #1a3678;
        }
        .titulo h1 {
            margin: 0;
            font-size: 3rem;
            color: white;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
          
            border: 1px solid #dee2e6;
        }
        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }
        .table th {
            
        }
        .table tbody tr:nth-child(odd) {
           
        }
       
        
        /* estilos.css */

/* Estilo para el botón Eliminar */
.btn.btn-danger {
    background-color: #dc3545; /* Color de fondo rojo */
    color: #fff; /* Texto blanco */
    padding: 8px 16px; /* Espaciado interno */
    border: none; /* Sin borde */
    border-radius: 4px; /* Bordes redondeados */
    text-decoration: none; /* Sin subrayado */
    display: inline-block; /* Mostrar como bloque en línea */
}

.btn.btn-danger:hover {
    background-color: #c82333; /* Cambio de color al pasar el mouse */
}

/* Estilo para el botón Modificar */
.btn.btn-warning {
    background-color: #ffc107; /* Color de fondo amarillo */
    color: #000; /* Texto negro */
    padding: 8px 16px; /* Espaciado interno */
    border: none; /* Sin borde */
    border-radius: 4px; /* Bordes redondeados */
    text-decoration: none; /* Sin subrayado */
    display: inline-block; /* Mostrar como bloque en línea */
}

.btn.btn-warning:hover {
    background-color: #e0a800; /* Cambio de color al pasar el mouse */
}

    </style>
</head>
<body>
    <div class="container">
        
       
<div class="titulo">
            <h1>Listado de Clientes</h1>
        </div>
        <table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombres y Apellidos</th>
			
			
			<th>Correo</th>
			<th>Contraseña</th>
			<th>Genero</th>
			<th>Ubicaciòn</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$c1=new usuarios("","","","","","");
		$clientes=$c1->listar();
		while($filas=mysqli_fetch_array($clientes))
		 {
			echo "<tr>";
			echo "<td>".$filas['id']."</td>";
			echo "<td>".$filas['nombre']."</td>";
		
		
			echo "<td>".$filas['correo']."</td>";
			echo "<td>".$filas['contraseña']."</td>";
			echo "<td>".$filas['género']."</td>";
			
            echo "<td> <a href='eliminar.php?cod=".$filas['id']."' class='btn btn-danger'>Eliminar</a></td>";
            echo "<td> <a href=''  class='btn btn-warning'>Modificar</a></td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>	
</div>
</body>
</html>