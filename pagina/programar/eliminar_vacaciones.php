<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');

       if(isset($_REQUEST['id_vacaciones']))
            {
              $id_vacaciones=$_REQUEST['id_vacaciones'];
            }
            else
            {
            $id_vacaciones=$_POST['id_vacaciones'];
          }

 


   
  mysqli_query($con,"delete from vacaciones where id_vacaciones='$id_vacaciones'")or die(mysqli_error());



  echo "<script>document.location='../programar/vacaciones.php'</script>";
     // header('Location:../usuario.php');
?>