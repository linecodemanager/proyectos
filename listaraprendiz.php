<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php $title = 'Listar aprendiz'; ?>
    <?php $metaTags = 'pagina de listado de aprendiz'; ?>
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
        <div class="container p-12">
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
                        <strong class="card-title">Aprendices</strong>
                    </div>
                    <div class="card-body" >
                        <table class="table table-striped table-bordered nowrap">
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
                                <a href="eliminar.php?Num_Documento=<?php echo $row['Num_Documento']?>" class="btn btn-warning active" role="button">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
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
    </script>       
</body>
</html>
