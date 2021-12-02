<?php

include 'conexion.php';
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Documento = $_POST["Documento"];

$insertar = "INSERT INTO usuarios(Nombre,Apellido,Cedula) VALUES ('$Nombre','$Apellido','$Documento')";

$resultado= mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script> alert('Registro correcto');
    location.href='RegistroCarro.php';
    </script>";

}else{
    echo "<script> alert('Registro incorrecto');
    location.href='RegistroUser.php';
    </script>";}
