<?php

include 'conexion.php';
$Placa = $_POST["Placa"];
$Marca = $_POST["Marca"];
$Id=$_POST["Id"];

$insertar = "INSERT INTO vehiculo(Placa,Marca,Id) VALUES ('$Placa','$Marca','$Id')";

$resultado1= mysqli_query($conexion, $insertar);


if($resultado1){
    echo "<script> alert('Registro correcto');
    location.href='Bahia.php';
    </script>";

}else{
    echo "<script> alert('Registro correcto');
    location.href='Bahia.php';
    </script>";}
    ?>

