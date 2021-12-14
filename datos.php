<?php 
$conexion=mysqli_connect('localhost','root','','sena_edu');
$continente=$_POST['continente'];

	$sql="SELECT id_reglameto,id_articulo from articulo_reglamento where id_reglameto='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label class='label-control'>Articulo</label>
    <select name='llaten_articulo_id_re' id='llaten_articulo_id_re'  class='js-example-basic-single' data-style='btn btn-link' data-size='5' data-title='Elegir un articulo' style='width:100%' required>
    <option value=''>Seleccione el Articulo</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[1].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
	

?>