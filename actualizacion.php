<?php
include("bd.php");


if (isset($_POST['actua_aprendiz'])) {
  $num_documeto = $_GET['Num_Documento'];
  $Num_Documento_ac = $_POST['Num_Documento_ac'];
  $nombre_apren_ac = $_POST['nombre_apren_ac'];
  $apell_apren_ac = $_POST['apell_apren_ac'];
  $grupoapren_ac = $_POST['grupoapren_ac'];
  $cursoapren_ac = $_POST['cursoapren_ac'];
  $Numficha_ac = $_POST['Numficha_ac'];
  $correoapren_ac = $_POST['correoapren_ac'];
  $Numcelular_ac = $_POST['Numcelular_ac'];

  $query = "UPDATE aprendiz set Num_Documento = '$Num_Documento_ac', Nombre = '$nombre_apren_ac', Apellido = '$apell_apren_ac',
   Grupo = '$grupoapren_ac', Curso = '$cursoapren_ac', Numficha = '$Numficha_ac', Correo = '$correoapren_ac',
   Numcelular = '$Numcelular_ac' WHERE Num_Documento=$num_documeto";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Registro actualizado con exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: listaraprendiz.php');
}

?>