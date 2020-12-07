


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$cid = $_POST['id_usuario'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];


	$correo = $_POST['correo'];


	$telefono = $_POST['telefono'];
	

if (!empty($_FILES['imagen']['name'])){
	# code...


$target_dir = "subir_us/";
	$target_file = $target_dir.basename($_FILES["imagen"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//Checando se realmente é uma imagem
	$check=getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "o arquivo nao e uma imagem.";
		$uploadok=0;
	}
	
	
	//checando se o arquivo ja existe
	if(file_exists($target_file)){
		echo "o arquivo nao e uma imagem.";
		$uploadok=0;
	}
	
	//checando o tamanho
	if($_FILES["imagen"]["size"]>500000){
		echo "o aquivo e muito grande desculpe.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	


	mysqli_query($con,"update usuario set usuario='$usuario',imagen='$img',nombre='$nombre',apellido='$apellido',telefono='$telefono',tipo='$tipo',correo='$correo' where id='$cid'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert(' Sucesso em atualizar!');</script>";
echo "<script>document.location='../usuario/usuario.php'</script>";	
	//	header('Location:../usuario.php');	
	
		} else{
			echo "No se pudo subir.";
		}

}
else
{

	mysqli_query($con,"update usuario set usuario='$usuario',imagen='',nombre='$nombre',apellido='$apellido',telefono='$telefono',tipo='$tipo',correo='$correo' where id='$cid'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert(' Atualizado corretamente!');</script>";
echo "<script>document.location='../usuario/usuario.php'</script>";		
	//	header('Location:../usuario.php');

}
	


?>
