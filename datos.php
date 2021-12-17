<?php 
$conexion=mysqli_connect('localhost','root','','sena_edu');
$continente=$_POST['continente'];

	$sql="SELECT articulo_reglamento.id_reglameto,articulo_reglamento.id_articulo,articulo.paragrafo from articulo_reglamento,articulo where articulo_reglamento.id_articulo = articulo.id_arti and articulo_reglamento.id_reglameto='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label class='label-control'>Articulo</label>
    <select name='llaten_articulo_id_rep' id='llaten_articulo_id_rep' onchange='mostrarvalores()'  class='js-example-basic-single' data-style='btn btn-link' data-size='5' data-title='Elegir un articulo' style='width:100%' required>
    <option value=''>Seleccione el Articulo</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[1].'_'.$ver[2].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
	

?>