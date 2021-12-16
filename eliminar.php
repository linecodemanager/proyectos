<?php

include("bd.php");
//Eliminar registro del aprendiz
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
//Eliminar registro de llamados de atencion
if(isset($_GET['id_llamatencion'])) {
  
  $id_llamatencion = $_GET['id_llamatencion'];
  $query = "DELETE FROM llamados_de_atencion WHERE id_llamatencion = $id_llamatencion";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.".mysqli_error($conn));
  }

  $_SESSION['message'] = 'Registro eliminado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: listarllamatencion.php');
}
//Eliminar registro del instructor
if(isset($_GET['id_instru'])) {
  
  $id_instru = $_GET['id_instru'];
  $query = "DELETE FROM instructor WHERE id_instru = $id_instru";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    //die("Query Failed.".mysqli_error($conn));
  $_SESSION['message'] = 'El registro no se puede eliminar porque esta asociado a otro registro';
  $_SESSION['message_type'] = 'danger';
  header('Location: listar.php');
  }

  $_SESSION['message'] = 'Registro eliminado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: listar.php');
}
//Eliminar registro del reglamento
if(isset($_GET['id_regla'])) {
  
  $id_regla = $_GET['id_regla'];
  $query = "DELETE FROM reglamento WHERE id_regla = $id_regla";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.".mysqli_error($conn));
    $_SESSION['message'] = 'El registro no se puede eliminar porque esta asociado a llamado de atencion';
  $_SESSION['message_type'] = 'danger';
  header('Location: listar.php');
  }else{
    $_SESSION['message'] = 'Registro eliminado con exito';
    $_SESSION['message_type'] = 'success';
    header('Location: listar.php');
  }

  
}
//Eliminar registro del articulo
if(isset($_GET['id_arti'])) {
  
  $id_arti = $_GET['id_arti'];
  $query = "DELETE FROM articulo WHERE id_arti = $id_arti";
  $result = mysqli_query($conn, $query);

  if(!$result)
  {
    die("Query Failed.".mysqli_error($conn));
    $_SESSION['message'] = 'El registro no se puede eliminar porque esta asociado a llamado de atencion';
    $_SESSION['message_type'] = 'danger';
    header('Location: listar.php');
  }else{

    $_SESSION['message'] = 'Registro eliminado con exito';
    $_SESSION['message_type'] = 'success';
    header('Location: listar.php');
  }

}
?>