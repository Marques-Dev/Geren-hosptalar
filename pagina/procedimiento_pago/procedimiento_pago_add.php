<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];

	$precio_venta = $_POST['precio_venta'];








			mysqli_query($con,"INSERT INTO procedimiento_pago(nombre,descripcion,precio_venta,estado)
				VALUES('$nombre','$descripcion','$precio_venta','a')")or die(mysqli_error($con));

			
	echo "<script>document.location='../procedimiento_pago/procedimiento_pago.php'</script>";	
	//header('Location:../usuario.php');

	














?>
