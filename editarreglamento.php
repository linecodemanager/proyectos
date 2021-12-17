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

if  (isset($_GET['id_regla'])) {
  $id_regla = $_GET['id_regla'];
  $query = "SELECT * FROM reglamento WHERE id_regla=$id_regla";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
   
    $Titulo_regla = $row['Titulo_regla'];
    $Descripcion_regla = $row['Descripcion_regla'];
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
                                    <h4 class="card-title">Actualizacion de reglamento</h4>
                                    <p class="card-category">Complete el formulario</p>
                                </div>
                                    <div class="card-body">
                                        <form action="actualizacion.php?id_regla=<?php echo $_GET['id_regla']; ?>" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="label-control" id="reglamento_capitulo_act">Capitulo</label>
                                                        <select class="js-example-basic-single" name="reglamento_capitulo_act" id="reglamento_capitulo_act" style="width:100%" data-size="5" required>
                                                            <?php
                                                            $query = "SELECT * FROM reglamento";
                                                            $result_tasks = mysqli_query($conn, $query);    
                                                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                            <option value="<?php echo $row['id_regla'];?>" <?php if(  $id_regla ===   $row['id_regla'] ) echo "selected"?> ><?php echo $row['id_regla'];?></option>
                                                            <?php } ?>  
                                                            <?php 
                                                            for($cont = 1; $cont < 1000; $cont++)
                                                            {
                                                        
                                                            echo'<option value="'.$cont.'">'.$cont.'</option>';
                                                        
                                                            }
                                                            ?>  
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="label-control">Titulo</label>
                                                        <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?php echo $Titulo_regla; ?>" name="reglamento_titulo_act" id="titulo_regla_act" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="label-control">Descripcion</label>
                                                        <textarea class="form-control" style="text-transform:uppercase;"  id="reglamento_descrip_act" name="reglamento_descrip_act" rows="3" required><?php echo $Descripcion_regla; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="actua_reglamento" class="btn btn-primary pull-right">Finalizar</button>
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
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
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
