<?php

$hostname='localhost';
$database='cfe';
$username='control';
$password='Control$23';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
	echo "lo sentimos, el sitio web esta experimentando problemas";
}


?>
