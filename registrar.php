<?php
include('bd.php');

if (isset($_POST['registrar_aprendiz'])) {
  $Num_Documento_re = $_POST['Num_Documento_re'];
  $nombre_apren_re = $_POST['nombre_apren_re'];
  $apell_apren_re = $_POST['apell_apren_re'];
  $grupoapren_re = $_POST['grupoapren_re'];
  $cursoapren_re = $_POST['cursoapren_re'];
  $Numficha_re = $_POST['Numficha_re'];
  $correoapren_re = $_POST['correoapren_re'];
  $Numcelular_re = $_POST['Numcelular_re'];
  $query = "INSERT INTO aprendiz(Num_Documento, Nombre, Apellido, Grupo, Curso, Numficha, Correo, Numcelular) VALUES ('$Num_Documento_re',
   '$nombre_apren_re','$apell_apren_re','$grupoapren_re','$cursoapren_re','$Numficha_re','$correoapren_re','$Numcelular_re')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida.");
  }
  
  $_SESSION['message'] = 'Registro guardado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: registrar_aprendiz.php');

  }



?>