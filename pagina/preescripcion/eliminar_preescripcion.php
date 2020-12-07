<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_preescripcion']))
            {
              $id_preescripcion=$_REQUEST['id_preescripcion'];
            }
            else
            {
            $id_preescripcion=$_POST['id_preescripcion'];
          }



  mysqli_query($con,"delete from preescripcion where id_preescripcion='$id_preescripcion'")or die(mysqli_error());

  echo "<script>document.location='../preescripcion/preescripcion.php'</script>";  
     // header('Location:../usuario.php');
?>