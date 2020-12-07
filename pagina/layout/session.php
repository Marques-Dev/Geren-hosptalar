<?php include('dbcon.php');
 @session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php 
}
$session_id=$_SESSION['id'];

$user_query = mysqli_query($con,"select * from usuario where id = '$session_id'")or die(mysql_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['usuario'];
   $nombre=$user_row['usuario'];
    
    $imagen=$user_row['imagen'];
    $tipo=$user_row['tipo'];




$empresa_query = mysqli_query($con,"select * from empresa where id_empresa = '1'")or die(mysql_error());
$empresa_row = mysqli_fetch_array($empresa_query);
$imagen_empresa = $empresa_row['imagen'];
$empresa = $empresa_row['empresa'];




$id=$_SESSION['id'];



 
?>