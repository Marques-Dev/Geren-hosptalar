<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre_pro = $_POST['nombre_pro'];
	$descripcion = $_POST['descripcion'];
	$unidad = $_POST['unidad'];
	$precio_venta = $_POST['precio_venta'];
$precio_compra = $_POST['precio_compra'];
$stock = $_POST['stock'];



if (!empty($_FILES['imagen']['name'])){
    
      
$target_dir = "subir_producto/";
	$target_file = $target_dir.basename($_FILES["imagen"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//checando se relamente e uma imagem
	$check=getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check!==false) {
		echo "o arquivo e uma imagem - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "o arquivo nao euma imagem.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "o aquivo ja existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen"]["size"]>500000){
		echo "o arquivo e muito grnade";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	



			mysqli_query($con,"INSERT INTO producto(nombre_pro,descripcion,unidad,precio_venta,precio_compra,imagen,stock,estado)
				VALUES('$nombre_pro','$descripcion','$unidad','$precio_venta','$precio_compra','$img','$stock','a')")or die(mysqli_error($con));

			
	echo "<script>document.location='../medicina/medicina.php'</script>";	
	//header('Location:../usuario.php');

	
	
		} else{
			echo "impossivel de subir.";
		}



   
}
else{




			mysqli_query($con,"INSERT INTO producto(nombre_pro,descripcion,unidad,precio_venta,precio_compra,imagen,stock,estado)
				VALUES('$nombre_pro','$descripcion','$unidad','$precio_venta','$precio_compra','','$stock','a')")or die(mysqli_error($con));

			
	echo "<script>document.location='../medicina/medicina.php'</script>";	
			//	header('Location:../usuario.php');
}














?>
