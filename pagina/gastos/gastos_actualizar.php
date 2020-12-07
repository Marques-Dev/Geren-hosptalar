


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_gastos = $_POST['id_gastos'];
	$id_categoria = $_POST['id_categoria'];
$cantidad = $_POST['cantidad'];
$nota = $_POST['nota'];

	mysqli_query($con,"update gastos set nota='$nota',cantidad='$cantidad',id_categoria='$id_categoria' where id_gastos='$id_gastos'")or die(mysqli_error());


echo "<script>document.location='../gastos/gastos.php'</script>";	

?>
