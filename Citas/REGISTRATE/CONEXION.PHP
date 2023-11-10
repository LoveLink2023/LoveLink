<?php
function conectar ()
{
	$cn=new mysqli("127.0.0.1","root","","citas",3306);
	if($cn)
		//echo "conexion ok";
		return $cn;

	else 
		//echo "Error de conexion";
		return null;
} 
//conectar();








?>