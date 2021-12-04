<?php
$host = "localhost";
$user= "root";
$clave = "";
$bd = "sena_edu";

$conexion= mysqli_connect($host,$user,$clave,$bd);

if($conexion)
{
    echo "conectado";

}else{

    echo "no conectado";

}

?>
