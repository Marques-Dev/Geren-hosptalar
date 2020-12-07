<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_cita']))
            {
              $id_cita=$_REQUEST['id_cita'];
            }
            else
            {
            $id_cita=$_POST['id_cita'];
          }



  mysqli_query($con,"delete from cita where id_cita= '$id_cita'")or die(mysqli_error());
echo "<script>document.location='../paciente/paciente.php'</script>"; 
     // header('Location:../usuario.php');
?>