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


if  (isset($_GET['Num_Documento'])) {
  $num_documeto = $_GET['Num_Documento'];
  $query = "SELECT * FROM aprendiz WHERE Num_Documento=$num_documeto";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
   
    $nombre = $row['Nombre_apren'];
    $apellido = $row['Apellido_apren'];
    $curso = $row['Curso_apren'];
    $numficha = $row['Numficha_apren'];
    $correo = $row['Correo_apren'];
    $numcelular = $row['Numcelular_apren'];
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
                        <h4 class="card-title">Actualizar aprendices</h4>
                        <p class="card-category">Complete el formulario</p>
                    </div>
                        <div class="card-body">
                            <form action="actualizacion.php?Num_Documento=<?php echo $_GET['Num_Documento']; ?>" method="post" enctype="multipart/form-data" name="f1" id="foraprendiz">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control" id="Num_Documento">Documento</label>
                                            <input type="tel" style="text-transform:uppercase;"onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" value="<?php echo $num_documeto; ?>" name="Num_Documento_ac" id="Num_Documento_ac" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control">Nombre</label>
                                            <input type="text" style="text-transform:uppercase;" value="<?php echo $nombre; ?>" onkeypress="return soloLetras(event)" onblur="limpia()" name="nombre_apren_ac" id="nombre_apren_ac"   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control">Apellido</label>
                                            <input type="text" style="text-transform:uppercase;" value="<?php echo $apellido; ?>" name="apell_apren_ac" id="apell_apren_ac" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control">Curso</label>
                                            <input type="text" style="text-transform:uppercase;" value="<?php echo $curso; ?>" name="cursoapren_ac" id="cursoapren_ac" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control">Numero de ficha</label>
                                            <input type="number" style="text-transform:uppercase;" value="<?php echo $numficha; ?>" id="Numficha_ac" name="Numficha_ac" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label for="precio_und" class="label-control">Correo</label>
                                            <input type="email" id="correoapren_ac" value="<?php echo $correo; ?>"  name="correoapren_ac" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control">Numero de celular</label>
                                            <input type="tel" style="text-transform:uppercase;"onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" pattern="\[0-9]{3}\ [0-9]{3}[ -][0-9]{4}" title="Un n??mero de tel??fono v??lido consta de un ??rea de c??digo de 3 d??gitos entre par??ntesis, un espacio, los tres primeros d??gitos del n??mero, un espacio o gui??n (-) y cuatro d??gitos m??s." value="<?php echo $numcelular; ?>"  name="Numcelular_ac" id="Numcelular_ac" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="actua_aprendiz" class="btn btn-primary pull-right">Finalizar</button>
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
