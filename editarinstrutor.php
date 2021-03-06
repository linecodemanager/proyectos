<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php $title = 'Inicio'; ?>
    <?php $metaTags = 'pagina de inicio'; ?>
    <?php $currentPage = 'index'; ?>
    <?php include('headen.php');?>
</head>
<body>
  <?php
  include("bd.php");
$num_documeto = '';
$nombre= '';
$apellido = '';
$grupo= '';
$curso = '';
$numficha= '';
$correo = '';
$numcelular= '';


if  (isset($_GET['id_instru'])) {
  $id_instru = $_GET['id_instru'];
  $query = "SELECT * FROM instructor WHERE id_instru=$id_instru";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
   
    $Nombre_instru = $row['Nombre_instru'];
    $Apellido_instru = $row['Apellido_instru'];
    $Titulo_instru = $row['Titulo_instru'];
    $Correo_instru = $row['Correo_instru'];
    $Numcelular_instru = $row['Numcelular_instru'];
  }
}
?>
<?php include("bd.php"); ?>
    <?php
    include('navbar.php');
    ?>
    <div class="container">
    <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo22.png" alt="">
                    </a>
                </div>
        <div class="row">
            <div class="col-md-12">
            <?php if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <?php session_unset(); } ?>
                        <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Actualizacion de instructor</h4>
                                    <p class="card-category">Complete el formulario</p>
                                </div>
                                <div class="card-body">
                                    <form action="actualizacion.php?id_instru=<?php echo $_GET['id_instru']; ?>" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control" id="id_intrutor_act">Identidad</label>
                                                    <input type="number" style="text-transform:uppercase;" onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="15" value="<?php echo $id_instru; ?>" name="id_intrutor_act" id="id_intrutor_act" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Nombre</label>
                                                    <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?php echo $Nombre_instru; ?>" name="nombre_intrutor_act" id="nombre_intrutor_act"   class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Apellido</label>
                                                    <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?php echo $Apellido_instru; ?>" name="apell_intrutor_act" id="apell_intrutor_act" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Titulo</label>
                                                    <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?php echo $Titulo_instru; ?>" name="intru_titulo_act" id="intru_titulo_act" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label for="precio_und" class="label-control">Correo</label>
                                                    <input type="email" id="correointrutor_act" value="<?php echo $Correo_instru; ?>"  name="correointrutor_act" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Numero de celular</label>
                                                    <input type="tel" style="text-transform:uppercase;" onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" value="<?php echo $Numcelular_instru; ?>" name="Numcelularintrutor_act" id="Numcelularintrutor_act"class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="actua_instrutor" class="btn btn-primary pull-right">Finalizar</button>
                                    </form>
                                </div>
                            </div>
            </div>
            <footer class="site-footer">
        <?php include("footer.php");?>
        </footer>
        </div>
    </div>
</body>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="../js/console_ubigeo.js"></script>
    <script>
        $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

function soloLetras(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " ??????????abcdefghijklmn??opqrstuvwxyz";
      especiales = [8, 37, 39, 46];
  
      tecla_especial = false
      for(var i in especiales) {
          if(key == especiales[i]) {
              tecla_especial = true;
              break;
          }
      }
  
      if(letras.indexOf(tecla) == -1 && !tecla_especial)
          return false;
  }
  function limpia() {
      var val = document.getElementById("miInput").value;
      var tam = val.length;
      for(i = 0; i < tam; i++) {
          if(!isNaN(val[i]))
              document.getElementById("miInput").value = '';
      }
  }
  function solonumeros(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " 0123456789";
      especiales = [8, 37, 39, 46];
  
      tecla_especial = false
      for(var i in especiales) {
          if(key == especiales[i]) {
              tecla_especial = true;
              break;
          }
      }
  
      if(letras.indexOf(tecla) == -1 && !tecla_especial)
          return false;
  }
    </script>  
</html>
