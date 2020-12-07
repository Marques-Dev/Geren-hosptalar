<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_pro']))
            {
              $id_pro=$_REQUEST['id_pro'];
            }
            else
            {
            $id_pro=$_POST['id_pro'];
          }



  mysqli_query($con,"update procedimiento_pago set estado='d' where id_procedimiento_pago='$id_pro'")or die(mysqli_error());
echo "<script>document.location='../procedimiento_pago/procedimiento_pago.php'</script>"; 
     // header('Location:../usuario.php');
?>