<?php
include('bd.php');
//La condicion If verifica si se hizo click en el boton y registra el aprendiz
if (isset($_POST['registrar_aprendiz'])) {
    $Num_Documento_re = $_POST['Num_Documento_re'];
    $nombre_apren_re = $_POST['nombre_apren_re'];
    $apell_apren_re = $_POST['apell_apren_re'];
    $cursoapren_re = $_POST['cursoapren_re'];
    $Numficha_re = $_POST['Numficha_re'];
    $correoapren_re = $_POST['correoapren_re'];
    $Numcelular_re = $_POST['Numcelular_re'];
    $query = "INSERT INTO aprendiz(Num_Documento, Nombre_apren, Apellido_apren, Curso_apren, Numficha_apren, Correo_apren, Numcelular_apren) VALUES ('$Num_Documento_re',
    '$nombre_apren_re','$apell_apren_re','$cursoapren_re','$Numficha_re','$correoapren_re','$Numcelular_re')";
    $result = mysqli_query($conn, $query);
    if(!$result){
      die("Consulta fallida.");
    }
    //En este codigo se muestra mensaje de alerta
    $_SESSION['message'] = 'Registro guardado con exito';
    $_SESSION['message_type'] = 'success';
    //Se hace la redireccion a la pagina registrar aprendiz
    header('Location: pagina_de_inicio.php');
  }
 //La condicion If verifica si se hizo click en el boton y registra el instrutor
  if (isset($_POST['registrar_instrutor'])) {
    $id_intrutor_re = $_POST['id_intrutor_re'];
    $nombre_intrutor_re = $_POST['nombre_intrutor_re'];
    $apell_intrutor_re = $_POST['apell_intrutor_re'];
    $intru_titulo_re = $_POST['intru_titulo_re'];
    $correointrutor_re = $_POST['correointrutor_re'];
    $Numcelularintrutor_re = $_POST['Numcelularintrutor_re'];

    $query = "INSERT INTO instructor(id_instru, Nombre_instru, Apellido_instru, Titulo_instru, Correo_instru, Numcelular_instru) VALUES ('$id_intrutor_re','$nombre_intrutor_re','$apell_intrutor_re','$intru_titulo_re','$correointrutor_re','$Numcelularintrutor_re')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Consulta fallida.".mysqli_error($conn));
    }
    
    $_SESSION['message'] = 'Registro guardado con exito';
    $_SESSION['message_type'] = 'success';
    header('Location: pagina_de_inicio.php');
  
    }
//La condicion If verifica si se hizo click en el boton y registra el reglamento
      if (isset($_POST['registrar_reglamento'])) {
        //insertar reglamento
        $reglamento_capitulo_re = $_POST['reglamento_capitulo_re'];
        $reglamento_titulo_re = $_POST['reglamento_titulo_re'];
        $reglamento_descrip_rec = $_POST['reglamento_descrip_rec'];
        $articulo_id_rec = $_POST['articulo_id_rec'];
        $paragrafo_rec = $_POST['paragrafo_rec'];

        $query = "INSERT INTO reglamento(id_regla , Titulo_regla, Descripcion_regla) VALUES ('$reglamento_capitulo_re','$reglamento_titulo_re','$reglamento_descrip_rec')";
        $result = mysqli_query($conn, $query);
        $querysel= mysqli_query($conn,"SELECT id_regla FROM reglamento where id_regla="."'".$reglamento_capitulo_re."'");
          if ($querysel) 
          {
              //insertar articulo
              $query1 = "INSERT INTO articulo(id_arti , paragrafo) VALUES ('$articulo_id_rec',
              '$paragrafo_rec')";
              $result1 = mysqli_query($conn, $query1);
                
                $querysel1= mysqli_query($conn,"SELECT id_arti FROM articulo where id_arti="."'".$articulo_id_rec."'");
                if($querysel1)
                {
                  
                  //consulta de validacion si el articulo pertenece a un reglamento
                  $querysel2= mysqli_query($conn,"SELECT id_reglameto,id_articulo FROM articulo_reglamento where  id_articulo="."'".$articulo_id_rec."'");
                  if ($row = mysqli_fetch_row($querysel2)) 
                  {
                    $_SESSION['message'] = 'No se pudo guardar el registro devido aque ya existe el articulo en el capitulo:'.trim($row[0]);
                    $_SESSION['message_type'] = 'success';
                   header('Location: pagina_de_inicio.php');
                  }else{

                    //insertar articulo reglamento tabla relacionada
                    $query2 = "INSERT INTO articulo_reglamento(id_reglameto, id_articulo) VALUES ('$reglamento_capitulo_re',
                    '$articulo_id_rec')";
                  $result2 = mysqli_query($conn, $query2);
                  if(!$result2) {
                    die("Consulta fallida.".mysqli_error($conn));
                  }
                  $_SESSION['message'] = 'Registro guardado con exito';
                  $_SESSION['message_type'] = 'success';
                  header('Location: pagina_de_inicio.php');
                  }
                   
                }else{
                  if(!$result1) {
                    die("Consulta fallida.".mysqli_error($conn));
                  }
                      
                }
        }else{
          if(!$result) {
            die("Consulta fallida.".mysqli_error($conn));
          }
        }
        
     
        
      
        }
//La condicion If verifica si se hizo click en el boton y registra el llamado de atencion
        if (isset($_POST['registrar_llamatencion'])) {
          $llaten_reglamento_id_re = $_POST['llaten_reglamento_id_re'];
          $llaten_instructor_id_re = $_POST['llaten_instructor_id_re'];
          $llaten_aprendiz_docum_re = $_POST['llaten_aprendiz_docum_re'];
          $llaten_descripcion_rec = $_POST['llaten_descripcion_rec'];
          $llaten_articulo_id_re = $_POST['llaten_articulo_id_re'];
  
          $query1 = "INSERT INTO llamados_de_atencion(id_llamatencion, Id_reglamentofk, id_articulo_fk, Descripcion_llam) VALUES (null,'$llaten_reglamento_id_re',
          '$llaten_articulo_id_re','$llaten_descripcion_rec')";
          $result1 = mysqli_query($conn, $query1);
          if(!$result1) {
            die("Consulta fallida. llamados_de_atencion").mysqli_error($conn);
          }
          $query2= mysqli_query($conn,"SELECT MAX(id_llamatencion ) AS id_llamatencion  FROM llamados_de_atencion");
          if ($row = mysqli_fetch_row($query2)) 
          {
            $id_llamaten = trim($row[0]);
          }
          $query3 = "INSERT INTO aprendiz_llam_atencion(Num_Documento, id_llamatencion) VALUES ('$llaten_aprendiz_docum_re',
           '$id_llamaten')";
          $result2 = mysqli_query($conn, $query3);
          if(!$result2) {
            die("Consulta fallida. aprendiz_llam_atencion").mysqli_error($conn);
          }
          $query4 = "INSERT INTO instructor_llam_atencion(id_instructor_fk, Id_llamado_atencionfk) VALUES ('$llaten_instructor_id_re',
           '$id_llamaten')";
          $result3 = mysqli_query($conn, $query4);
          if(!$result3) {
            die("Consulta fallida. instructor_llam_atencion").mysqli_error($conn);
          }
          $_SESSION['message'] = 'Registro guardado con exito';
          $_SESSION['message_type'] = 'success';
          header('Location: pagina_de_inicio.php');
        
          }
  



?>