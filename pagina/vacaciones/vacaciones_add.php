<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_medico = $_POST['id_medico'];
	$fecha = $_POST['fecha'];




	

		mysqli_query($con,"INSERT INTO vacaciones(fecha,id_medico)
				VALUES('$fecha','$id_medico')")or die(mysqli_error($con));

			

  echo "<script>document.location='../vacaciones/vacaciones.php?cid=$id_medico'</script>";

?>
