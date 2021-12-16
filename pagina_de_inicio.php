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
<?php include("bd.php"); ?>
    <?php
    include('navbar.php');
    ?>
    <aside id="left-panel" class="left-panel">
    <?php
    include('panel_lateral.php');
    ?>
    </aside>
<div class="content fa-align-center">
    <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
                        <div class="login-logo">
                                <img class="align-content" src="images/logo22.png" alt="">
                        </div>
                        <?php if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <?php session_unset(); } ?>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-aprendiz-tab" data-toggle="pill" href="#pills-aprendiz" role="tab" aria-controls="pills-aprendiz" aria-selected="true">Aprendiz</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-instrutores-tab" data-toggle="pill" href="#pills-instrutores" role="tab" aria-controls="pills-instrutores" aria-selected="false">Instructor</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-reglamento-tab" data-toggle="pill" href="#pills-reglamento" role="tab" aria-controls="pills-reglamento" aria-selected="false">Reglamento</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-llamaaten-tab" data-toggle="pill" href="#pills-llamaaten" role="tab" aria-controls="pills-llamaaten" aria-selected="false">Llamados de atencion</a>
                            </li>
                        </ul>
                <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-aprendiz" role="tabpanel" aria-labelledby="pills-aprendiz-tab">  
                            <div class="row">
                                <div class="col-md-12">
                                        
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
                                                            <input type="tel" style="text-transform:uppercase;" onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" name="Num_Documento_re" id="Num_Documento_re" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="label-control">Nombre</label>
                                                            <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" name="nombre_apren_re" id="nombre_apren_re"   class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="label-control">Apellido</label>
                                                            <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" name="apell_apren_re" id="apell_apren_re" class="form-control" required>
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
                                                            <input type="email" id="correoapren_re"  name="correoapren_re" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="label-control">Numero de celular</label>
                                                            <input type="tel" style="text-transform:uppercase;" onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" name="Numcelular_re" id="Numcelular_re" class="form-control" required>
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
                        <div class="tab-pane fade show" id="pills-instrutores" role="tabpanel" aria-labelledby="pills-instrutores-tab">  
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Registro de instructor</h4>
                                    <p class="card-category">Complete el formulario</p>
                                </div>
                                <div class="card-body">
                                    <form action="registrar.php" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control" id="id_intrutor_re">Identidad</label>
                                                    <input type="tel" style="text-transform:uppercase;" onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" name="id_intrutor_re" id="id_intrutor_re" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Nombre</label>
                                                    <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" name="nombre_intrutor_re" id="nombre_intrutor_re"   class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Apellido</label>
                                                    <input type="text" style="text-transform:uppercase;" onkeypress="return soloLetras(event)" onblur="limpia()" name="apell_intrutor_re" id="apell_intrutor_re" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Titulo</label>
                                                    <input type="text" style="text-transform:uppercase;" name="intru_titulo_re" id="intru_titulo_re" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label for="precio_und" class="label-control">Correo</label>
                                                    <input type="email" id="correointrutor_re"  name="correointrutor_re" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Numero de celular</label>
                                                    <input type="tel" style="text-transform:uppercase;" onkeypress="return solonumeros(event)" onblur="limpia()" maxlength="10" name="Numcelularintrutor_re" id="Numcelularintrutor_re"class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="registrar_instrutor" class="btn btn-primary pull-right">Finalizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-reglamento" role="tabpanel" aria-labelledby="pills-reglamento-tab">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Registro de reglamento</h4>
                                    <p class="card-category">Complete el formulario</p>
                                </div>
                                    <div class="card-body">
                                        <form action="registrar.php" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="label-control" id="reglamento_capitulo_re">Capitulo</label>
                                                        <select class="js-example-basic-single" name="reglamento_capitulo_re" id="reglamento_capitulo_re" style="width:100%" data-size="5" required>
                                                            <?php
                                                            $query = "SELECT * FROM reglamento";
                                                            $result_tasks = mysqli_query($conn, $query);    
                                                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                            <option value="<?php echo $row['id_regla'];?>"><?php echo $row['id_regla'];?>|<?php echo $row['Titulo_regla'];?></option>
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
                                                        <input type="text" style="text-transform:uppercase;" name="reglamento_titulo_re" id="titulo_regla_re" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="label-control">Descripcion</label>
                                                        <textarea class="form-control" style="text-transform:uppercase;" id="reglamento_regla_rec" name="reglamento_descrip_rec" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-static">Articulo</label>
                                                        <input name="articulo_id_rec" type="number" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md 6">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="label-control">Paragrafo</label>
                                                        <textarea class="form-control" style="text-transform:uppercase;" id="paragrafo_rec" name="paragrafo_rec" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button type="submit" name="registrar_reglamento" class="btn btn-primary pull-right">Finalizar</button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="pills-llamaaten" role="tabpanel" aria-labelledby="pills-llamaaten-tab">  
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Registro de llamado de atencion</h4>
                                    <p class="card-category">Complete el formulario</p>
                                </div>
                                <div class="card-body">
                                    <form action="registrar.php" method="post" enctype="multipart/form-data" name="f1" id="forinventario">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Reglamento</label>
                                                    <select name="llaten_reglamento_id_re" id="llaten_reglamento_id_re"  class="js-example-basic-single" data-style="btn btn-link" data-size="5" data-title="Elegir un reglamento" style="width:100%" required>
                                                           
                                                            <?php
                                                            $query = "SELECT * FROM reglamento";
                                                            $result_tasks = mysqli_query($conn, $query);    

                                                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                            <option value="<?php echo $row['id_regla'];?>"><?php echo $row['id_regla'];?>|<?php echo $row['Titulo_regla'];?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group" id="select2lista">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Instructor</label>
                                                    <select name="llaten_instructor_id_re"  class="js-example-basic-single" data-style="btn btn-link" data-size="7" data-title="Elegir un instructor" style="width:100%" required>
                                                    <option value="">Seleccione el Instructor</option>
                                                    <?php
                                                            $query = "SELECT * FROM instructor";
                                                            $result_tasks = mysqli_query($conn, $query);    
                                                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                            <option value="<?php echo $row['id_instru'];?>"><?php echo $row['id_instru'];?>|<?php echo $row['Nombre_instru'];?> <?php echo $row['Apellido_instru'];?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-static">Aprendiz</label>
                                                    <select name="llaten_aprendiz_docum_re"  class="js-example-basic-single" data-style="btn btn-link" data-size="7" data-title="Elegir un instructor" style="width:100%" required>
                                                    <option value="">Seleccione el Aprendiz</option>
                                                    <?php
                                                            $query = "SELECT * FROM aprendiz";
                                                            $result_tasks = mysqli_query($conn, $query);    

                                                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                            <option value="<?php echo $row['Num_Documento'];?>">C.C:<?php echo $row['Num_Documento'];?>|<?php echo $row['Nombre_apren'];?> <?php echo $row['Apellido_apren'];?>|Fich:<?php echo $row['Numficha_apren'];?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group bmd-form-group">
                                                    <label class="label-control">Observaciones</label>
                                                    <textarea class="form-control" id="llaten_descripcion_rec" name="llaten_descripcion_rec" rows="3" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="registrar_llamatencion" class="btn btn-primary pull-right">Finalizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
        <footer class="site-footer">
        <?php include("footer.php");?>
        </footer>
    </div>
    
</div>

    <!-- Right Panel -->

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
    // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#llaten_reglamento_id_re').val(1);
		recargarLista();

		$('#llaten_reglamento_id_re').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"continente=" + $('#llaten_reglamento_id_re').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
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
</body>

</html>