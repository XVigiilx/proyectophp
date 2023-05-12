<?php

include("conexion.php");

//$sql = "SELECT * FROM usuarios";

//$sql = "SELECT * FROM usuarios WHERE id='7'";
//$sql = "SELECT * FROM usuarios WHERE edad > 30";
//$sql = "SELECT * FROM usuarios WHERE edad < 30";
//$sql = "SELECT * FROM usuarios WHERE apellido LIKE '%a%'";
$sql = "SELECT * FROM usuarios ORDER by id ASC"

$res = $conexion->query($sql);

while($usuarios = $res->fetch_assoc()){
    echo "usuario No: " .  $usuarios['id'] . "<br>";
    echo "Su nombre es: " .  $usuarios['nombre'] . "<br>";
    echo "Su apellido es: " .  $usuarios['apellido'] . "<br>";
    echo "Su edad es: " .  $usuarios['edad'] . "<br>";
}

?>