echo "<script> alert('Registro correcto');
    location.href='Factura.php';
    </script>";
<?php 

$inc = include "conexion.php";
if ($inc) {

	$consulta = "SELECT ID FROM vehiculo";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $ID = $row['id'];
	    $ID_Bahia = $row['id_bahia'];
    
    
	   
	    ?>
