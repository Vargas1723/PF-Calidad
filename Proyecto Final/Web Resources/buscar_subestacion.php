<?php

include 'conexion.php';

$consulta = "SELECT ordenes.texto_breve, equipos.subestacion FROM ordenes LEFT JOIN equipos ON equipos.equipo = ordenes.equipo GROUP BY equipos.subestacion";
$resultado = $conexion -> query($consulta);

while ($fila=$resultado -> fetch_array()) {
 	$producto[] = array_map('utf8_encode', $fila);
 }
echo json_encode($producto);
$resultado -> close();


?>
