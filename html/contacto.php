<?php 

$nombre="";
$apellidos="";
$email="";
$sexo="";
$series="";


if($_POST)
{
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$series=$_POST['series'];
}

if (! empty($nombre)) {
echo("<br><br>Nombre: ".$nombre);
echo("<br>Apellidos: ".$apellidos);
echo("<br>Email: " .$email);
echo("<br><br>Género: ".$sexo);
echo("<br>Opinión: ".$series);
}
?>