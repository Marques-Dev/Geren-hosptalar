<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');






    mysqli_query($con,"delete from categoria_gastos")or die(mysqli_error());
    mysqli_query($con,"delete from categoria_gastos_farmacia ")or die(mysqli_error());
       mysqli_query($con,"delete from cita")or die(mysqli_error());
       mysqli_query($con,"delete from detalles_pedido  ")or die(mysqli_error());
              mysqli_query($con,"delete from detalles_pedido_medicina  ")or die(mysqli_error());
              mysqli_query($con,"delete from detalle_preescripcion   ")or die(mysqli_error());
            mysqli_query($con,"delete from gastos  ")or die(mysqli_error());
                   mysqli_query($con,"delete from gastos_farmacia  ")or die(mysqli_error());
                      mysqli_query($con,"delete from horario_medico  ")or die(mysqli_error());
                         mysqli_query($con,"delete from  pedidos   ")or die(mysqli_error());
                            mysqli_query($con,"delete from  pedido_medicina  ")or die(mysqli_error());
              mysqli_query($con,"delete from  preescripcion  ")or die(mysqli_error());
     mysqli_query($con,"delete from  procedimiento_pago  ")or die(mysqli_error());
 mysqli_query($con,"delete from  producto ")or die(mysqli_error());
  mysqli_query($con,"delete from  vacaciones ")or die(mysqli_error());

 
  echo "<script>document.location='../layout/inicio.php'</script>";  
  
  
?>