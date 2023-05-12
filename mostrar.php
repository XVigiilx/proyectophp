<?php

include("conexion.php");

$sql = "SELECT * FROM usuarios";
$res = $conexion->query($sql);

while($usuarios = $res->fetch_assoc()){
    echo "usuario No: " .  $usuarios['id'] . "<br>";
    echo "Su nombre es: " .  $usuarios['nombre'] . "<br>";
    echo "Su apellido es: " .  $usuarios['apellido'] . "<br>";
    echo "Su edad es: " .  $usuarios['edad'] . "<br>";
}

?>