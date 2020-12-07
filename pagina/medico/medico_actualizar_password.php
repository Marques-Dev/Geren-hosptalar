


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$cid = $_POST['id_usuario'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];








		if ($password==$password2) {
	# code...



	
//Ecnripitando a senha
	$pass=md5($password);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;
		//Fianalizando a criptação da senha

	mysqli_query($con,"update usuario set password='$pass' where id='$cid'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";

	echo "<script>document.location='../medico/medico.php'</script>";	
	//header('Location:../usuario.php');	


}
else
{


	echo "<script type='text/javascript'>alert('error contraseñas no coinciden !');</script>";
echo "<script>document.location='../medico/medico.php'</script>";	
	//header('Location:../usuario.php');

}
	


?>
