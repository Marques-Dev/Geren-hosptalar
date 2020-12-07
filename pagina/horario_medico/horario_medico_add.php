<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_medico = $_POST['id_medico'];
	$dia_laborable = $_POST['dia_laborable'];

	$hora_inicio = $_POST['hora_inicio'];
	$hora_fin = $_POST['hora_fin'];
$cita_duracion = $_POST['cita_duracion'];



	

		mysqli_query($con,"INSERT INTO horario_medico(dia_laborable,hora_inicio,hora_fin,cita_duracion,id_medico)
				VALUES('$dia_laborable','$hora_inicio','$hora_fin','$cita_duracion','$id_medico')")or die(mysqli_error($con));

			

  echo "<script>document.location='../horario_medico/horario_medico.php?cid=$id_medico'</script>";

?>
