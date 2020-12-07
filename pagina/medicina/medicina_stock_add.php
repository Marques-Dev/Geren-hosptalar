


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

$id_pro = $_POST['id_pro'];

	$cantidad = $_POST['cantidad'];

  $update=mysqli_query($con,"update producto set stock=stock+'$cantidad' where id_pro='$id_pro' ");




echo "<script>document.location='../medicina/medicina.php'</script>";	

?>
