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
    <aside id="left-panel" class="left-panel">
    <?php
    include('panel_lateral.php');
    ?>
    </aside>
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
                                            <input type="number" style="text-transform:uppercase;" maxlength="15" value="<?php echo $num_documeto; ?>" name="Num_Documento_ac" id="Num_Documento_ac" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="label-control">Nombre</label>
                                            <input type="text" style="text-transform:uppercase;" value="<?php echo $nombre; ?>" name="nombre_apren_ac" id="nombre_apren_ac"   class="form-control">
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
                                            <input type="tel" style="text-transform:uppercase;" pattern="\[0-9]{3}\ [0-9]{3}[ -][0-9]{4}" title="Un número de teléfono válido consta de un área de código de 3 dígitos entre paréntesis, un espacio, los tres primeros dígitos del número, un espacio o guión (-) y cuatro dígitos más." value="<?php echo $numcelular; ?>"  name="Numcelular_ac" id="Numcelular_ac" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="actua_aprendiz" class="btn btn-primary pull-right">Finalizar</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
