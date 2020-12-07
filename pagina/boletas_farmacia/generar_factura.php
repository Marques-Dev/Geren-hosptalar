
<?php

 @session_start();
require('fpdf17/fpdf.php');

      if(isset($_REQUEST['id_reparacion']))
            {
              $id_reparacion=$_REQUEST['id_reparacion'];
            }
            else
            {
            $id_reparacion=$_POST['id_reparacion'];
          }


 


           include ('../layout/dbcon.php');
//$branch_id = $_GET['id'];




require_once "ajax/Letras.php";


//$branch_id = $_GET['id'];


$nombre_cliente="";
$telefono_cliente="";
$email_cliente="";
$documento_cliente="";





    $query3=mysqli_query($con,"select * from reparacion r inner join marca m on m.id_marca = r.id_marca inner join modelo md on md.id_modelo = r.id_modelo inner join clientes c on c.id_cliente = r.cliente where id_reparacion= '$id_reparacion' ")or die(mysqli_error($con));

   while($row3=mysqli_fetch_array($query3)){
$auto=$row['nombre_marca'].'  '.$row['nombre_modelo'];
         $placa=$row3['placa'];
          $fecha_estimada=$row3['fecha_estimada'];
$nombre_cliente=$row3['nombre'];
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

  $content = '';
  
    $content .= '<IMG src=../configuracion/images/'. $imagen.' style="height:50PX" />  ';

      $content .= '<table  cellpadding="10">
        <thead>
          <tr>
            <th>DATOS GENERAL</th>
            <th>REPARACION</th>

       
        </thead>
  ';
  
  


  

  $content .= '
    <tr  bgcolor="'.$color.' ">
            <td>Fecha estimada:   '.$fecha_estimada.'</td>  
               <td>Revision componentes:    '.$revision_componentes.'</td> 
          </tr>
           

              <tr  bgcolor="'.$color.' ">
            <td>Placa:   '.$placa.'</td>  
          <td>Fallas:    '.$fallas.'</td> 
 
                    </tr>
                                 <tr  bgcolor="'.$color.' ">
            <td>Cliente:   '.$nombre_cliente.'</td>  
    <td>Precio estimado reparacion:   '.$precio_estimado.'</td>  
 
                    </tr>
                                 <tr  bgcolor="'.$color.' ">
            <td>   '.''.'</td>  

             
                    </tr>


                    </tr>
                                 <tr  bgcolor="'.$color.' ">
            <td>'.''.'</td>  
            
             
                    </tr>
       
  ';
  
  
  $content .= '</table>';


  $content .= '      <table  cellpadding="10">
        <thead>
          <tr>
            <th>Descripcion</th>
            <th>Precio unitario</th>
            <th>Cantidad</th>

    <th>Sub total</th>
          </tr>
        </thead>
  ';
    $query=mysqli_query($con,"select * from detalles_pedido d inner join producto p on d.id_producto = p.id_pro 
 where d.id_reparacion='$id_reparacion'  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
      if(1=='1'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2';  }
  $content .= '
    <tr  bgcolor="'.$color.' ">
            <td>'.$row['nombre_pro'].'</td>
            <td>'.$row['precio_venta'].'</td>
            <td>'.$row['cantidad'].'</td>

     <td>'.$row['cantidad']*$row['precio_venta'].'</td>
           
        </tr>
  ';
  }
  
  $content .= '</table>';
  
  $content .= '
    <div class="row padding">
          <div class="col-md-12" style="text-align:center;">
              <span> </span>
            </div>
        </div>

  ';
  
  $content .= '

         <br><br><br> <br><br>     <table class="table table-bordered table-striped"  style="border:none;">
                    <thead>
                      <tr>


                        <th style="border:none;"></th>
                        <th style="border:none;"></th>
                       
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                          <tr >

    <tr style="border:none;  width: 10px; heigt: 10px">
          <tr style="border:none; width: 70px ">
             <tr style="border:none;  ">
              <td style="border:none;"></td> 
                <td style="border:none; "></td>    
<td style="border:none;"> total letras= '.$con_letra.''.$tipo_moneda.'</td> 
<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;"></td> 
                     <td style="border:none;">sub total repuestos= '.$sub.'<br>sub total reparacion= '.$precio_estimado.'<br> impuesto= '.$igv.'<br> total= '.$sum.'<br> 
                <td style="border:none; "></td> 
              </tr>
                 <tr style="border:none; ">
                      <tr style="border:none;  ">
                            <tr style="border:none;  ">
              <td style="border:none; width: 70px"></td> 
                <td style="border:none; width: 70px"> </td> 
                <td style="border:none;"></td> 
<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>     
              </tr>
       
                  
                 </tr> 
                   </tbody>

                  </table>

  ';

//==============================================================
//==============================================================
//==============================================================

include("mpdf/mpdf.php");



//==============================================================
//==============================================================
//==============================================================
    $mpdf = new mPDF();



    $mpdf->WriteHTML($content);

    $mpdf->Output();

    exit;

?>