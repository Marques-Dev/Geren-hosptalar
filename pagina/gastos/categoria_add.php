<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$descripcion = $_POST['descripcion'];

	
			mysqli_query($con,"INSERT INTO categoria_gastos(descripcion)
				VALUES('$descripcion')")or die(mysqli_error($con));

			
		echo "<script>document.location='../gastos/gastos_categoria.php'</script>";	


















?>
