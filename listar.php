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

    <div class="container" >
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
                                <a class="nav-link active" id="pills-aprendiz-tab" data-toggle="pill" href="#pills-aprendiz" role="tab" aria-controls="pills-aprendiz" aria-selected="true">Aprendices</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-instrutores-tab" data-toggle="pill" href="#pills-instrutores" role="tab" aria-controls="pills-instrutores" aria-selected="false">Instructor</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-reglamento-tab" data-toggle="pill" href="#pills-reglamento" role="tab" aria-controls="pills-reglamento" aria-selected="false">Reglamento</a>
                            </li>
                        </ul>
                <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-aprendiz" role="tabpanel" aria-labelledby="pills-aprendiz-tab">  
                            <div class="container p-12">
                                <div class="card w-500">
                                    <div class="card-header">
                                        <strong class="card-title">Aprendices</strong>
                                    </div>
                                    <div class="card-body" >
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>CC</th>
                                                <th>Nombre completo</th>
                                                <th>Curso</th>
                                                <th># Ficha</th>
                                                <th>Correo</th>
                                                <th>Celular</th>
                                                <th>Fecha</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = "SELECT * FROM aprendiz";
                                            $result_tasks = mysqli_query($conn, $query);    

                                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                            <tr>
                                                <td><?php echo $row['Num_Documento']; ?></td>
                                                <td><?php echo $row['Nombre_apren'];?>  <?php echo $row['Apellido_apren']; ?></td>
                                                <td><?php echo $row['Curso_apren']; ?></td>
                                                <td><?php echo $row['Numficha_apren']; ?></td>
                                                <td><?php echo $row['Correo_apren']; ?></td>
                                                <td><?php echo $row['Numcelular_apren']; ?></td>
                                                <td><?php echo date('d/m/Y:h:i', strtotime($row['Fecha_apren'])); ?></td>
                                                <td>
                                                <a href="editaprendiz.php?Num_Documento=<?php echo $row['Num_Documento']?>" class="btn btn-primary active" role="button">Actualizar</a>
                                                <br>
                                                <a href="#" onclick="confirmaraprendiz(<?php echo $row['Num_Documento']?>)" class="btn btn-warning active" role="button">Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div>
                        </div>
                            <div class="tab-pane fade show" id="pills-instrutores" role="tabpanel" aria-labelledby="pills-instrutores-tab">  
                                <div class="container p-12">
                                    <div class="card w-200">
                                        <div class="card-header">
                                            <strong class="card-title">Lista de instructores</strong>
                                        </div>
                                        <div class="card-body" >
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Idetidad</th>
                                                    <th>Nombre completo</th>
                                                    <th>Titulo</th>
                                                    <th>Correo</th>
                                                    <th>Celular</th>
                                                    <th>Fecha</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $query = "SELECT * FROM instructor";
                                                $result_tasks = mysqli_query($conn, $query);    

                                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                <tr>
                                                    <td><?php echo $row['id_instru']; ?></td>
                                                    <td><?php echo $row['Nombre_instru'];?>  <?php echo $row['Apellido_instru']; ?></td>
                                                    <td><?php echo $row['Titulo_instru']; ?></td>
                                                    <td><?php echo $row['Correo_instru']; ?></td>
                                                    <td><?php echo $row['Numcelular_instru']; ?></td>
                                                    <td><?php echo date('d/m/Y:h:i', strtotime($row['fecha_instru'])); ?></td>
                                                    <td>
                                                    <a href="editarinstrutor.php?id_instru=<?php echo $row['id_instru']?>" class="btn btn-primary active" role="button">Actualizar</a>
                                                    <br>
                                                    <a href="#" onclick="confirmarinstrutor(<?php echo $row['id_instru']?>)" class="btn btn-warning active" role="button">Eliminar</a>   
                                                    </td>   
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        </div> <!-- /.table-stats -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-reglamento" role="tabpanel" aria-labelledby="pills-reglamento-tab">
                                <div class="container p-12">
                                    <div class="card w-200">
                                            <div class="card-header">
                                                <strong class="card-title">Lista de reglamento</strong>
                                            </div>
                                        <div class="card-body" >
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Capitulo</th>
                                                    <th>Titulo</th>
                                                    <th>Descripcion</th>
                                                    <th>Fecha</th>
                                                    <th>Articulos</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include_once "base_de_datos.php";
                                            $sentencia = $base_de_datos->query("SELECT reglamento.id_regla, reglamento.Titulo_regla, reglamento.Descripcion_regla, reglamento.Fecha_regla, GROUP_CONCAT( articulo.id_arti, '..', articulo.paragrafo, '..', articulo.fecha_arti  SEPARATOR '__') AS articulo FROM reglamento INNER JOIN articulo_reglamento ON articulo_reglamento.id_reglameto = reglamento.id_regla INNER JOIN articulo ON articulo.id_arti = articulo_reglamento.id_articulo GROUP BY reglamento.id_regla ORDER BY reglamento.id_regla;");
                                            $reglamento = $sentencia->fetchAll(PDO::FETCH_OBJ);
                                            //$query = "SELECT * from articulo_reglamento,articulo,reglamento where articulo_reglamento.id_articulo = articulo.id_arti and articulo_reglamento.id_reglameto = reglamento.id_regla";
                                            $result_tasks = mysqli_query($conn, $query);    
                                            foreach($reglamento as $reglamento){ ?>
                                                <tr>
                                                    <td><?php echo $reglamento->id_regla ?></td>
                                                    <td><?php echo $reglamento->Titulo_regla ?></td>
                                                    <td><textarea rows="3" disabled><?php echo $reglamento->Descripcion_regla ?></textarea></td>
                                                    <td><?php echo date('d/m/Y:h:i', strtotime($reglamento->Fecha_regla)) ?></td>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Articulo</th>
                                                                    <th>Paragrafo</th>
                                                                    <th>fecha</th>
                                                                    <th>Opciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach(explode("__", $reglamento->articulo) as $reglamentosConcatenados){ 
                                                                $articulo = explode("..", $reglamentosConcatenados)
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $articulo[0] ?></td>
                                                                    <td><textarea rows="3" disabled><?php echo $articulo[1] ?></textarea></td>
                                                                    <td><?php echo date('d/m/Y:h:i', strtotime($articulo[2])) ?></td>
                                                                    <td>
                                                                    <a href="editararticulo.php?id_arti=<?php echo $articulo[0]?>" class="btn btn-primary active" role="button">Actualizar</a>
                                                                    <br>
                                                                    <a href="#" onclick="confirmararticulo(<?php echo $articulo[0]?>)" class="btn btn-warning active" role="button">Eliminar</a>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td>
                                                    <a href="editarreglamento.php?id_regla=<?php echo $reglamento->id_regla?>" class="btn btn-primary active" role="button">Actualizar</a>
                                                    <br>
                                                    <a href="#" onclick="confirmarreglamento(<?php echo $reglamento->id_regla?>)" class="btn btn-warning active" role="button">Eliminar</a>
                                                    </td>
                                                </tr>
                                                    
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        </div> <!-- /.table-stats -->
                                    </div>
                                </div>
                            </div>
                </div>
        </div>
        <footer class="site-footer">
        <?php include("footer.php");?>
        </footer>
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
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
        function confirmaraprendiz(id){
          if(confirm("¿Esta seguro de eliminar el registro?"))
          {
              window.location.href = "eliminar.php?Num_Documento="+id;
          }
        }

        function confirmarinstrutor(id){
          if(confirm("¿Esta seguro de eliminar el registro?"))
          {
              window.location.href = "eliminar.php?id_instru="+id;
          }
        }

        function confirmarreglamento(id){
          if(confirm("¿Esta seguro de eliminar el registro?"))
          {
              window.location.href = "eliminar.php?id_regla="+id;
          }
        }

        function confirmararticulo(id){
          if(confirm("¿Esta seguro de eliminar el registro?"))
          {
              window.location.href = "eliminar.php?id_arti="+id;
          }
        }
    </script>
</body>

</html>