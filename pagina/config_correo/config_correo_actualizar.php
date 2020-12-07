


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$host = $_POST['host'];
	$username = $_POST['username'];
	$password = $_POST['password'];
















		







	mysqli_query($con,"update empresa set host='$host',username='$username',password='$password' ")or die(mysqli_error());



	echo "<script>document.location='../config_correo/config_correo.php'</script>";	
	//	header('Location:../usuario.php');	
	