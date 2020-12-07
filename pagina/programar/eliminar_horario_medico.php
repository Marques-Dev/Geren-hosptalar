<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');

       if(isset($_REQUEST['id_horario_medico']))
            {
              $id_horario_medico=$_REQUEST['id_horario_medico'];
            }
            else
            {
            $id_horario_medico=$_POST['id_horario_medico'];
          }




   
  mysqli_query($con,"delete from horario_medico where id_horario_medico='$id_horario_medico'")or die(mysqli_error());



  echo "<script>document.location='../programar/horario_medico.php'</script>";
     // header('Location:../usuario.php');
?>