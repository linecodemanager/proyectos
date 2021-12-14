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
                                    <h4 class="card-title">Actualizacion de instructor</h4>
                                    <p class="card-category">Complete el formulario</p>
                                </div>
                                <div class="card-body">
                                    <form action="actualizacion.php" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control" id="id_intrutor_act">Identidad</label>
                                                    <input type="number" style="text-transform:uppercase;" value="<?php echo $id_instru; ?>" name="id_intrutor_act" id="id_intrutor_act" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Nombre</label>
                                                    <input type="text" style="text-transform:uppercase;" value="<?php echo $Nombre_instru; ?>" name="nombre_intrutor_act" id="nombre_intrutor_act"   class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Apellido</label>
                                                    <input type="text" style="text-transform:uppercase;" value="<?php echo $Apellido_instru; ?>" name="apell_intrutor_act" id="apell_intrutor_act" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Titulo</label>
                                                    <input type="text" style="text-transform:uppercase;" value="<?php echo $Titulo_instru; ?>" name="intru_titulo_act" id="intru_titulo_act" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label for="precio_und" class="label-control">Correo</label>
                                                    <input type="text" id="correointrutor_act" value="<?php echo $Correo_instru; ?>"  name="correointrutor_act" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Numero de celular</label>
                                                    <input type="number" style="text-transform:uppercase;" value="<?php echo $Numcelular_instru; ?>" name="Numcelularintrutor_act" id="Numcelularintrutor_act"class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="actua_instrutor" class="btn btn-primary pull-right">Finalizar</button>
                                    </form>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</body>
</html>
