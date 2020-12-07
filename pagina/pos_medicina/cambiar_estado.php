<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_reparacion']))
            {
              $id_reparacion=$_REQUEST['id_reparacion'];
            }
            else
            {
            $id_reparacion=$_POST['id_reparacion'];
          }

       $query11=mysqli_query($con,"select * from empresa ")or die(mysqli_error($con));

   while($row11=mysqli_fetch_array($query11)){

 $impuesto_producto=$row11['impuesto'];
    
      }


    $query3=mysqli_query($con,"select * from reparacion r inner join marca m on m.id_marca = r.id_marca inner join modelo md on md.id_modelo = r.id_modelo inner join clientes c on c.id_cliente = r.cliente where id_reparacion= '$id_reparacion' ")or die(mysqli_error($con));

   while($row3=mysqli_fetch_array($query3)){

$precio_estimado=$row3['precio_estimado'];

          
      }








//echo $logo;
      $sum=0;
   $igv=0;   
   $sub=0;   
   $sub_igv=0;
    $query5=mysqli_query($con,"select * from detalles_pedido d inner join producto p on d.id_producto = p.id_pro 
 where d.id_reparacion='$id_reparacion' ")or die(mysqli_error($con));

   while($row5=mysqli_fetch_array($query5)){
      //   $total=$row['cantidad']*$row['precio_venta'];
                $sub=$sub+$row5['precio_venta']*$row5['cantidad'];
        
     



 $igv=$igv+($row5['precio_venta']*$row5['cantidad'])*$impuesto_producto/100;
      $sum=$sum+$row5['precio_venta']*$row5['cantidad']+($row5['precio_venta']*$row5['cantidad'])*$impuesto_producto/100;







      }
       $igv=$igv+($precio_estimado*$impuesto_producto/100);
       $sum=$sum+$precio_estimado+($precio_estimado*$impuesto_producto/100);



//  $update=mysqli_query($con,"update caja set monto=monto+'$sum' where estado='abierto' ");


  mysqli_query($con,"update reparacion set estado_reparacion='reparado' where id_reparacion='$id_reparacion'")or die(mysqli_error());
echo "<script>document.location='../reparacion/reparacion.php'</script>"; 
     // header('Location:../usuario.php');
?>