<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');



          if(isset($_REQUEST['id_gastos']))
            {
              $id_gastos=$_REQUEST['id_gastos'];
            }
            else
            {
            $id_gastos=$_POST['id_gastos'];
          }


   
  mysqli_query($con,"delete from gastos_farmacia where id_gastos='$id_gastos'")or die(mysqli_error());



  echo "<script>document.location='../gastos_farmacia/gastos_farmacia.php'</script>";
     // header('Location:../usuario.php');
?>