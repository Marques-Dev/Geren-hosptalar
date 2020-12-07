<?php error_reporting (0);

$id_reparacion=$_GET['id_reparacion'];
      include ('../layout/dbcon.php');
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../reparacion/public/css/ticket.css" rel="stylesheet" type="text/css">
<script>
    function printPantalla()
{
   document.getElementById('cuerpoPagina').style.marginRight  = "0";
   document.getElementById('cuerpoPagina').style.marginTop = "1";
   document.getElementById('cuerpoPagina').style.marginLeft = "1";
   document.getElementById('cuerpoPagina').style.marginBottom = "0"; 
   document.getElementById('botonPrint').style.display = "none"; 
   window.print();
}
</script>
</head>
<body id="cuerpoPagina">
<?php


require_once "ajax/Letras.php";
date_default_timezone_set('America/Lima');

$nombre_cliente="";






    $query3=mysqli_query($con,"select * from reparacion r inner join marca m on m.id_marca = r.id_marca inner join modelo md on md.id_modelo = r.id_modelo inner join clientes c on c.id_cliente = r.cliente where id_reparacion= '$id_reparacion' ")or die(mysqli_error($con));

   while($row3=mysqli_fetch_array($query3)){
$auto=$row['nombre_marca'].'  '.$row['nombre_modelo'];
         $placa=$row3['placa'];
          $fecha_estimada=$row3['fecha_estimada'];
$nombre_cliente=$row3['nombre'];
$telefono_cliente=$row3['telefono'];
$email_cliente=$row3['correo'];
$precio_estimado=$row3['precio_estimado'];
$revision_componentes=$row3['revision_componentes'];

$fallas=$row3['fallas'];
          
      }



       $query11=mysqli_query($con,"select * from empresa ")or die(mysqli_error($con));

   while($row11=mysqli_fetch_array($query11)){
        $empresa=$row11['empresa'];

 $impuesto_producto=$row11['impuesto'];

  $simbolo_moneda=$row11['simbolo_moneda'];
    $tipo_moneda=$row11['tipo_moneda'];
     $imagen=$row11['imagen'];
     $telefono_empresa=$row11['telefono'];
     $direccion_empresa=$row11['direccion'];

    
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
$color= '#f5f5f5';
 $V=new EnLetras(); 
 $con_letra=strtoupper($V->ValorEnLetras($sum,$tipo_moneda)); 



?>


<div class="zona_impresion">
        <!-- codigo imprimir -->
<br>
<table border="0" align="center" width="300px">
    <tr>
        <td align="center">
        .::<strong> <?php echo $empresa; ?></strong>::.<br>
        <?php echo $direccion_empresa; ?><br>
       <?php echo $telefono_empresa; ?><br>
        </td>
    </tr>
    <tr>
        <td align="center"><?php echo "Fecha estimda reparacion ".$fecha_estimada; ?></td>
    </tr>
    <tr>
      <td align="center"></td>
    </tr>
    <tr>
        <td>Cliente: <?php echo $nombre_cliente; ?></td>
    </tr>
    <tr>
        <td>Telefono proveedor: <?php echo $telefono_cliente; ?></td>
    </tr>
    <tr>
        <td>Email proveedor: <?php echo $email_cliente ; ?></td>
    </tr>    
</table>
<br>
<table border="0" align="center" width="300px">
    <tr>
        <td>CANT.</td>
        <td>DESCRIPCIÓN</td>
        <td align="right">PRECIO </td>
    
    </tr>
    <tr>
      <td colspan="3">==========================================</td>
    </tr>
    <?php
                                     $query4=mysqli_query($con,"select * from detalles_pedido d inner join producto p on d.id_producto = p.id_pro 
 where d.id_reparacion='$id_reparacion' ")or die(mysqli_error($con));
                    while ($row4=mysqli_fetch_array($query4)){
        echo "<tr>";
        echo "<td>".$row4['cantidad']."</td>";
        echo "<td>".$row4['nombre_pro']."</td>";
        echo "<td align='right'>". $simbolo_moneda." ".$row4['precio_venta']."</td>";
        echo "</tr>";

    }

    ?>

    <tr>
    <td>&nbsp;</td>
    <td align="right"><b>SUB TOTAL REPUESTOS:</b></td>
    <td align="right"><b><?php echo $simbolo_moneda;?>  <?php echo $sub;  ?></b></td>
    </tr>
   <tr>
    <td>&nbsp;</td>
    <td align="right"><b>SUB REPARACION:</b></td>
    <td align="right"><b><?php echo $simbolo_moneda;?>  <?php echo $precio_estimado;  ?></b></td>
    </tr>


            <tr>
    <td>&nbsp;</td>
    <td align="right"><b>IMPUESTO:</b></td>
    <td align="right"><b><?php echo $simbolo_moneda;?>  <?php echo $igv;  ?></b></td>
    </tr>
        <tr>
    <td>&nbsp;</td>
    <td align="right"><b>TOTAL:</b></td>
    <td align="right"><b><?php echo $simbolo_moneda;?>  <?php echo $sum;  ?></b></td>
    </tr>

    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>      

    <tr>
      <td colspan="3" align="center"></td>
    </tr>
    <tr>
      <td colspan="3" align="center"></td>
    </tr>
    
</table>
<br>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
  
<div style="margin-left:245px;"><a href="#" id="botonPrint" onClick="printPantalla();"><img src="img/printer.png" border="0" style="cursor:pointer" title="Imprimir"></a></div>
</body>
</html>