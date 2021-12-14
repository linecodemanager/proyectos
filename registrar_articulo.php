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
                        <h4 class="card-title">Registro de articulos</h4>
                        <p class="card-category">Complete el formulario</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Articulo</label>
                                        <input name="articulo_id" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md 6">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Paragrafo</label>
                                        <textarea class="form-control" style="text-transform:uppercase;" id="paragrafo" name="paragrafo" rows="3" ></textarea>
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