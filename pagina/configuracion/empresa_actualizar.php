


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_empresa = $_POST['id_empresa'];
	$empresa = $_POST['empresa'];
	$ruc = $_POST['ruc'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$descripcion = $_POST['descripcion'];
	$correo = $_POST['correo'];
	$simbolo_moneda = $_POST['simbolo_moneda'];

$tipo_moneda = $_POST['tipo_moneda'];















		










if (!empty($_FILES['imagen']['name'])){
	# code...


$target_dir = "images/";
	$target_file = $target_dir.basename($_FILES["imagen"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen"]["size"]>500000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	


	mysqli_query($con,"update empresa set empresa='$empresa',ruc='$ruc',direccion='$direccion',telefono='$telefono',descripcion='$descripcion',imagen='$img',correo='$correo',simbolo_moneda='$simbolo_moneda',tipo_moneda='$tipo_moneda' where id_empresa='$id_empresa'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('empresa actualizado correctamente!');</script>";

	echo "<script>document.location='../configuracion/configuracion.php'</script>";	
	//	header('Location:../usuario.php');	
	
		} else{
			echo "No se pudo subir.";
		}

}
else
{


	mysqli_query($con,"update empresa set empresa='$empresa',ruc='$ruc',direccion='$direccion',telefono='$telefono',descripcion='$descripcion',correo='$correo',simbolo_moneda='$simbolo_moneda',tipo_moneda='$tipo_moneda' where id_empresa='$id_empresa'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('empresa actualizado correctamente!');</script>";

	echo "<script>document.location='../configuracion/configuracion.php'</script>";		
	//	header('Location:../usuario.php');

}
	

?>
