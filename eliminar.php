<?php

include("bd.php");
//Eliminar registro del aprndiz
if(isset($_GET['Num_Documento'])) {
  
  $Num_Documento = $_GET['Num_Documento'];
  $query = "DELETE FROM aprendiz WHERE Num_Documento = $Num_Documento";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    //die("Query Failed este regiastro no se pede eliminar.".mysqli_error($conn));
    $_SESSION['message'] = 'El registro no se puede eliminar porque esta asociado a llamado de atencion';
    $_SESSION['message_type'] = 'danger';
    header('Location: listar.php');
  }else{
    $_SESSION['message'] = 'Registro eliminado con exito';
    $_SESSION['message_type'] = 'success';
    header('Location: listar.php');
  }

}
if(isset($_GET['id_llamatencion'])) {
  
  $id_llamatencion = $_GET['id_llamatencion'];
  $query = "DELETE FROM llamados_de_atencion WHERE id_llamatencion = $id_llamatencion";
  //$query = "DELETE FROM llamados_de_atencion WHERE id_llamatencion = $id_llamatencion";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.".mysqli_error($conn));
    /*$_SESSION['message'] = 'El registro no se puede eliminar porque esta asociado a llamado de atencion';
  $_SESSION['message_type'] = 'danger';
  header('Location: listar.php');*/
  }

  $_SESSION['message'] = 'Registro eliminado con exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: listarllamatencion.php');
}
?>