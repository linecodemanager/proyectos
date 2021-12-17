<?php
include("bd.php");
if (isset($_POST['actua_aprendiz'])) {
  $num_documeto = $_GET['Num_Documento'];
  $Num_Documento_ac = $_POST['Num_Documento_ac'];
  $nombre_apren_ac = $_POST['nombre_apren_ac'];
  $apell_apren_ac = $_POST['apell_apren_ac'];
  $cursoapren_ac = $_POST['cursoapren_ac'];
  $Numficha_ac = $_POST['Numficha_ac'];
  $correoapren_ac = $_POST['correoapren_ac'];
  $Numcelular_ac = $_POST['Numcelular_ac'];

  $query = "UPDATE aprendiz set Num_Documento = '$Num_Documento_ac', Nombre_apren = '$nombre_apren_ac', Apellido_apren = '$apell_apren_ac',
   Curso_apren = '$cursoapren_ac', Numficha_apren = '$Numficha_ac', Correo_apren = '$correoapren_ac',
   Numcelular_apren = '$Numcelular_ac' WHERE Num_Documento=$num_documeto";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Registro actualizado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: listar.php');
}

if (isset($_POST['actua_instrutor'])) {
    $id_instru_ac = $_GET['id_instru'];
    $id_intrutor_act = $_POST['id_intrutor_act'];
    $nombre_intrutor_act = $_POST['nombre_intrutor_act'];
    $apell_intrutor_act = $_POST['apell_intrutor_act'];
    $intru_titulo_act = $_POST['intru_titulo_act'];
    $correointrutor_act= $_POST['correointrutor_act'];
    $Numcelularintrutor_act = $_POST['Numcelularintrutor_act'];

  $query = "UPDATE instructor set id_instru = '$id_intrutor_act', Nombre_instru = '$nombre_intrutor_act', Apellido_instru = '$apell_intrutor_act',
   Titulo_instru = '$intru_titulo_act', Correo_instru = '$correointrutor_act', Numcelular_instru = '$Numcelularintrutor_act' WHERE id_instru=$id_instru_ac";
  $Myquery = mysqli_query($conn, $query);
    if(!$Myquery)
    {
      die("Consulta fallida.".mysqli_error($conn));
    }
  $_SESSION['message'] = 'Registro actualizado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: listar.php');
}

if (isset($_POST['actua_reglamento'])) {
  $id_regla = $_GET['id_regla'];
  $reglamento_capitulo_act = $_POST['reglamento_capitulo_act'];
  $reglamento_titulo_act = $_POST['reglamento_titulo_act'];
  $reglamento_descrip_act = $_POST['reglamento_descrip_act'];

  $query = "UPDATE reglamento set id_regla = '$reglamento_capitulo_act', Titulo_regla = '$reglamento_titulo_act', Descripcion_regla = '$reglamento_descrip_act' WHERE id_regla=$id_regla";
  $Myquery = mysqli_query($conn, $query);
  if(!$Myquery)
  {
    die("Consulta fallida. datos duplicados no se puede cambiar el capitulo".mysqli_error($conn));
  }
  $_SESSION['message'] = 'Registro actualizado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: listar.php');
}

if (isset($_POST['actua_articulo'])) {
  $id_arti = $_GET['id_arti'];
  $articulo_id_act = $_POST['articulo_id_act'];
  $paragrafo_act = $_POST['paragrafo_act'];

  $query = "UPDATE articulo set id_arti = '$articulo_id_act', paragrafo = '$paragrafo_act' WHERE id_arti=$id_arti";
  $Myquery = mysqli_query($conn, $query);
  if(!$Myquery)
  {
    die("Consulta fallida. datos duplicados no se puede cambiar el capitulo".mysqli_error($conn));
  }
$_SESSION['message'] = 'Registro actualizado con exito';
$_SESSION['message_type'] = 'warning';
header('Location: listar.php');
}

?>