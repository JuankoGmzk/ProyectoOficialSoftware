<?php

$server = "localhost";
$baseDatos = "id13286728_skillclass";
$user = "root";
$pass = "";
$conexion = mysqli_connect($server,$user,$pass,$baseDatos);

if(!$conexion){
  echo "No se conecto";
}
?>
