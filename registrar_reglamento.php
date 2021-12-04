<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php $title = 'Registro de reglamento'; ?>
    <?php $metaTags = 'pagina de registro de reglamento'; ?>
    <?php $currentPage = 'index'; ?>
    <?php include('headen.php');?>
</head>
<body>
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
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Registro de reglamento</h4>
                        <p class="card-category">Complete el formulario</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control" id="Num_Documento">Capitulo</label>
                                        <select name="capitulo"  class="form-control selectpicker " data-style="btn btn-link" data-size="7" data-title="Elegir un capitulo" >
                                            <option value="">Selecciona un capitulo</option>
                                            <?php 
                                            for($cont = 0; $cont <=500; $cont++)
                                            {
                                              echo'<option value="'.$cont++.'">'.$cont++.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Articulo numero?</label>
                                        <select name="articulo_id"  class="form-control selectpicker " data-style="btn btn-link" data-size="7" data-title="Elegir un numero" >
                                        <option value="">Selecciona un # articulo</option>
                                            <?php 
                                            for($cont = 0; $cont <=500; $cont++)
                                            {
                                           echo'<option value="'.$cont++.'">'.$cont++.'</option>';
                                            }
                                                ?>
                                        </select>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Titulo</label>
                                        <input type="text" style="text-transform:uppercase;" name="titulo_regla_re" id="titulo_regla_re" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Descripcion</label>
                                        <input type="text" style="text-transform:uppercase;" name="descripcion_regla_re" id="descripcion_regla_re" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Curso</label>
                                        <input type="text" style="text-transform:uppercase;" name="cursoapren" id="cursoapren" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Numero de ficha</label>
                                        <input type="number" style="text-transform:uppercase;"  id="Numficha" name="Numficha" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label for="precio_und" class="label-control">Correo</label>
                                        <input type="text" id="correoapren"  name="correoapren" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Numero de celular</label>
                                        <input type="number" style="text-transform:uppercase;" name="Numcelular" id="Numcelular" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Finalizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>