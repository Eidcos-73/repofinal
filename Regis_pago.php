<?php 

$inc = include "conexion.php";
if ($inc) {

	$consulta = "SELECT ID_Bahia,ID_Vehiculo FROM bahia";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $ID_Vehiculo = $row['id_vehiculo'];
	    $ID_Bahia = $row['id_bahia'];
    
    
	   
	    ?>
