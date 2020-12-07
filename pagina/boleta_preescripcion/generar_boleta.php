
<?php

 @session_start();
require('fpdf17/fpdf.php');

      if(isset($_REQUEST['id_preescripcion']))
            {
              $id_preescripcion=$_REQUEST['id_preescripcion'];
            }
            else
            {
            $id_preescripcion=$_POST['id_preescripcion'];
          }


 


           include ('../layout/dbcon.php');
//$branch_id = $_GET['id'];




require_once "ajax/Letras.php";


//$branch_id = $_GET['id'];


$nombre_cliente="";






    $query3=mysqli_query($con,"select * from preescripcion p inner join usuario c on c.id = p.id_cliente where id_preescripcion= '$id_preescripcion' ")or die(mysqli_error($con));

   while($row3=mysqli_fetch_array($query3)){
$nombre_cliente=$row3['nombre'].'  '.$row['apellido'];
         $correo_cliente=$row3['correo'];
          $telefono_cliente=$row3['telefono'];




$fecha=$row3['fecha'];
          
      }



       $query11=mysqli_query($con,"select * from empresa ")or die(mysqli_error($con));

   while($row11=mysqli_fetch_array($query11)){
        $empresa=$row11['empresa'];
// $impuesto_producto=$row11['impuesto'];

  $telefono_empresa=$row11['telefono'];
  $direccion_empresa=$row11['direccion'];
  $simbolo_moneda=$row11['simbolo_moneda'];
    $tipo_moneda=$row11['tipo_moneda'];
     $imagen=$row11['imagen'];
    
      }



       












//echo $logo;
      $sum=0;
   $igv=0;   
   $sub=0;   
   $sub_igv=0;
    $query5=mysqli_query($con,"select * from detalles_pedido_medicina d inner join producto p on d.id_producto = p.id_pro 
 where  id_pedido='$id_pedido'  ")or die(mysqli_error($con));

   while($row5=mysqli_fetch_array($query5)){
      //   $total=$row['cantidad']*$row['precio_venta'];
                $sub=$sub+$row5['precio_venta']*$row5['cantidad'];
        
     



// $igv=$igv+($row5['precio_venta']*$row5['cantidad'])*$impuesto_producto/100;
  //    $sum=$sum+$row5['precio_venta']*$row5['cantidad']+($row5['precio_venta']*$row5['cantidad'])*$impuesto_producto/100;







      }

 //      $sum=$sum+$precio_estimado+($precio_estimado*$impuesto_producto/100);
$color= '#f5f5f5';
 $V=new EnLetras(); 
 $con_letra=strtoupper($V->ValorEnLetras($sub,$tipo_moneda)); 

  $content = '';
  
    $content .= '<IMG src=../configuracion/images/'. $imagen.' style="height:50PX" />  ';

      $content .= '<table  cellpadding="10">
        <thead>
          <tr>
            <th>DATOS EMPRESA</th>
            <th>CLIENTE</th>

       
        </thead>
  ';
  
  


  

  $content .= '
    <tr  bgcolor="'.$color.' ">
            <td>Empresa:   '.$empresa.'</td><br>  
               <td>Direccion :    '.$direccion_empresa.'</td>

          </tr>
           

    
                                 <tr  bgcolor="'.$color.' ">
            <td>Fecha:   '.$fecha.'</td>  
    <td>Nombre paciente:   '.$nombre_cliente.'</td> 
       
 
                    </tr>



         
       
  ';
  
  
  $content .= '</table>';


  $content .= '      <table  cellpadding="10">
        <thead>
          <tr>
            <th>medicina</th>
            <th>dosis</th>
            <th>frecuencia</th>
  <th>dias</th>
    <th>instruccion</th>
          </tr>
        </thead>
  ';
    $query=mysqli_query($con,"select * from detalle_preescripcion  
 where  id_preescripcion='$id_preescripcion'   ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
      if(1=='1'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2';  }
  $content .= '
    <tr  bgcolor="'.$color.' ">
            <td>'.$row['medicina'].'</td>
            <td>'.$row['dosis'].'</td>
            <td>'.$row['frecuencia'].'</td>
     <td>'.$row['dias'].'</td>
     <td>'.$row['instruccion'].'</td>
           
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

<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;"></td> 
                
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