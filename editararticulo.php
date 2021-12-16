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
$id_regla  = '';
$Titulo_regla= '';
$Descripcion_regla = '';

if  (isset($_GET['id_arti'])) {
  $id_arti  = $_GET['id_arti'];
  $query = "SELECT * FROM articulo WHERE id_arti =$id_arti";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
   
    $paragrafo = $row['paragrafo'];
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
                        <h4 class="card-title">Actualizacion de articulos</h4>
                        <p class="card-category">Complete el formulario</p>
                    </div>
                    <div class="card-body">
                        <form action="actualizacion.php?id_arti=<?php echo $_GET['id_arti']; ?>" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Articulo</label>
                                        <input name="articulo_id_act" type="number" value="<?php echo $id_arti; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md 6">
                                    <div class="form-group bmd-form-group">
                                        <label class="label-control">Paragrafo</label>
                                        <textarea class="form-control" style="text-transform:uppercase;" id="paragrafo_act" name="paragrafo_act" rows="3" ><?php echo $paragrafo; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="actua_articulo" class="btn btn-primary pull-right">Finalizar</button>
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
    </script>  
</html>
