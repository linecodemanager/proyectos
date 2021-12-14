<?php

include("bd.php");
//Eliminar registro del aprndiz
if(isset($_GET['Num_Documento'])) {
  $Num_Documento = $_GET['Num_Documento'];
  $query = "DELETE FROM aprendiz WHERE Num_Documento = $Num_Documento";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro eliminado con exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: listaraprendiz.php');
}

?>