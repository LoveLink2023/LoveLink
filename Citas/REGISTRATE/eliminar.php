<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include_once("Datos.php");
$c1=new  usuarios("","","","","","","","");
if($c1->eliminar($_GET['cod']))

 {
		echo "<script>window.alert('cliente Eliminado');</script>";
	}
	else
	{
		echo "<script>window.alert('Error al Eliminar');</script>";
 
}
echo "<script>window.location='listadocita.php';</script>";
?>
</body>
</html>
