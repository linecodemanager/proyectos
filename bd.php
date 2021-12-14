<?php
session_start();
//conexion de la base de datos
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sena_edu'
)
//si no se cumple la anterior condision
//se muestra un error
or die(mysqli_error($mysqli));

?>