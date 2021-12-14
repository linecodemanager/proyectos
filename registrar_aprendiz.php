<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php $title = 'Registro aprendiz'; ?>
    <?php $metaTags = 'Pagina de registro del aprendiz'; ?>
    <?php $currentPage = 'index'; ?>
    <?php include('headen.php');?>
</head>
<body>
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
                        <h4 class="card-title">Registro de aprendices</h4>
                        <p class="card-category">Complete el formulario</p>
                    </div>
                    <div class="card-body">
                        
                        <form action="registrar.php" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control" id="Num_Documento">Documento</label>
                                        <input type="number" style="text-transform:uppercase;" name="Num_Documento_re" id="Num_Documento_re" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Nombre</label>
                                        <input type="text" style="text-transform:uppercase;" name="nombre_apren_re" id="nombre_apren_re"   class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Apellido</label>
                                        <input type="text" style="text-transform:uppercase;" name="apell_apren_re" id="apell_apren_re" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Curso</label>
                                        <input type="text" style="text-transform:uppercase;" name="cursoapren_re" id="cursoapren_re" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Numero de ficha</label>
                                        <input type="number" style="text-transform:uppercase;"  id="Numficha_re" name="Numficha_re" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label for="precio_und" class="label-control">Correo</label>
                                        <input type="text" id="correoapren_re"  name="correoapren_re" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Numero de celular</label>
                                        <input type="number" style="text-transform:uppercase;" name="Numcelular_re" id="Numcelular_re" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="registrar_aprendiz" class="btn btn-primary pull-right">Finalizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
