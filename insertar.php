<?php

include ("conexion.php");

$sql = "INSERT INTO usuarios(nombre,apellido,edad) VALUES ('Miguel' ,'lpz' , '22')";

$res = $conexion->query($sql);

if($res){

    echo "Dato agregado exitosamente";

}else{

    echo "Fallo la insercion";

}

?>