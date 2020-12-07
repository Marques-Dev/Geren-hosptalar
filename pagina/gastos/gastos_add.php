<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$cantidad = $_POST['cantidad'];
	$nota = $_POST['nota'];
$id_categoria = $_POST['id_categoria'];
   $fecha = date('Y-m-d');
	
			mysqli_query($con,"INSERT INTO gastos(cantidad,nota,fecha,id_categoria)
				VALUES('$cantidad','$nota','$fecha','$id_categoria')")or die(mysqli_error($con));

			
		echo "<script>document.location='../gastos/gastos.php'</script>";	


















?>
