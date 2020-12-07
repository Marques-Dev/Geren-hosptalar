<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');



          if(isset($_REQUEST['id_categoria']))
            {
              $id_categoria=$_REQUEST['id_categoria'];
            }
            else
            {
            $id_categoria=$_POST['id_categoria'];
          }


   
  mysqli_query($con,"delete from categoria_gastos_farmacia where id_categoria='$id_categoria'")or die(mysqli_error());



  echo "<script>document.location='../gastos_farmacia/categoria.php'</script>";
     // header('Location:../usuario.php');
?>