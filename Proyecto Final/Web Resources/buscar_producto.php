<?php

include 'conexion.php';
$subestacion=$_GET['subestacion'];

$consulta = "select ordenes.orden, ordenes.texto_breve,ordenes.equipo,ordenes.ubicacion_tecnica,equipos.fabricante,equipos.modelo,equipos.no_serie,equipos.subestacion from ordenes left join equipos on ordenes.equipo = equipos.equipo WHERE ordenes.texto_breve LIKE '%$subestacion%'";
$resultado = $conexion -> query($consulta);

while ($fila=$resultado -> fetch_array()) {
 	$producto[] = array_map('utf8_encode', $fila);
 }
echo json_encode($producto);
$resultado -> close();


?>
