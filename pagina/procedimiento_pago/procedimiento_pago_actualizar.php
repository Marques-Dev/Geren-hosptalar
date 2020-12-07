


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');
	$id_procedimiento_pago = $_POST['id_procedimiento_pago'];
	
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];


$precio_venta = $_POST['precio_venta'];


	


	mysqli_query($con,"update procedimiento_pago set nombre='$nombre',descripcion='$descripcion',precio_venta='$precio_venta' where id_procedimiento_pago='$id_procedimiento_pago'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
echo "<script>document.location='../procedimiento_pago/procedimiento_pago.php'</script>";	
	//	header('Location:../usuario.php');	
	
