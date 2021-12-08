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
        <div class="container p-4">
            <div class="card">
                <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo22.png" alt="">
                </a>
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
                                <th>Grupo</th>
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
                                <td><?php echo $row['Nombre']; echo $row['Apellido']; ?></td>
                                <td><?php echo $row['Grupo']; ?></td>
                                <td><?php echo $row['Curso']; ?></td>
                                <td><?php echo $row['Numficha']; ?></td>
                                <td><?php echo $row['Correo']; ?></td>
                                <td><?php echo $row['Numcelular']; ?></td>
                                <td><?php echo date('d/m/Y:h:i', strtotime($row['Fecha'])); ?></td>
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
