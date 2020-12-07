<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_actividades']))
            {
              $id_actividades=$_REQUEST['id_actividades'];
            }
            else
            {
            $id_actividades=$_POST['id_actividades'];
          }



  mysqli_query($con,"delete from actividades where id_actividades= '$id_actividades'")or die(mysqli_error());
echo "<script>document.location='../actividades/actividades.php'</script>"; 
     // header('Location:../usuario.php');
?>