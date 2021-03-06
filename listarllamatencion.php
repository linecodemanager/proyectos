<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php $title = 'Lista de llamado de atencion'; ?>
    <?php $metaTags = 'pagina de listado de llamado de atencion'; ?>
    <?php $currentPage = 'index'; ?>
    <?php include('headen.php');?>
</head>
<body>
<?php include("bd.php"); ?>
    <?php
    include('navbar.php');
    ?>
        <div class="container ">
            <div class="card">
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
                    <div class="card-header">
                        <strong class="card-title">Llamados de atencion</strong>
                    </div>
                    <div class="card-body" >
                      <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Intructor</th>
                                <th>Reglamento</th>
                                <th>Articulo</th>
                                <th>Descripcion</th>
                                <th>Aprendiz</th>
                                <th>Ficha Apr</th>
                                <th>Fecha</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM llamados_de_atencion,aprendiz_llam_atencion
                            ,instructor_llam_atencion
                            ,instructor,aprendiz
                            ,reglamento,articulo
                             WHERE llamados_de_atencion.id_llamatencion = aprendiz_llam_atencion.id_llamatencion 
                             AND llamados_de_atencion.id_llamatencion = instructor_llam_atencion.Id_llamado_atencionfk 
                             AND instructor.id_instru = instructor_llam_atencion.id_instructor_fk 
                             AND aprendiz.Num_Documento = aprendiz_llam_atencion.Num_Documento 
                             AND llamados_de_atencion.Id_reglamentofk = reglamento.id_regla 
                             AND llamados_de_atencion.id_articulo_fk = articulo.id_arti";
                            $result_tasks = mysqli_query($conn, $query);    
                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr>
                                <td><?php echo $row['id_llamatencion']; ?></td>
                                <td><?php echo $row['Nombre_instru'];?>  <?php echo $row['Apellido_instru']; ?></td>
                                <td><?php echo $row['Titulo_regla']; ?></td>
                                <td><?php echo $row['Titulo_regla']; ?></td>
                                <td class="text-center">
                                <textarea rows="3" disabled><?php echo $row['Descripcion_llam'];?></textarea></td>
                                
                                </td>
                                <td><?php echo $row['Nombre_apren'];?>  <?php echo $row['Apellido_apren']; ?></td>
                                <td><?php echo $row['Numficha_apren']; ?></td>
                                <td><?php echo date('d/m/Y:h:i', strtotime($row['fecha_llam'])); ?></td>
                                <td>
                                <a href="#" onclick="confirmar(<?php echo $row['id_llamatencion']?>)" class="btn btn-warning active" role="button">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                      </div>
                    </div>
                    <footer class="site-footer">
        <?php include("footer.php");?>
        </footer> <!-- /.table-stats -->
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
        $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true
        } );
 
            new $.fn.dataTable.FixedHeader( table );
        } );
        $(function () {
        $('.example-popover').popover({
            container: 'body'
        })
        })
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
        $(document).ready(function() {
            $('#example').DataTable();
            
        } );
        function confirmar(id){
          if(confirm("??Esta seguro de eliminar el registro?"))
          {
              window.location.href = "eliminar.php?id_llamatencion="+id;
          }
        }
        

    </script>       
</body>
</html>
