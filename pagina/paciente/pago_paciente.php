
<?php include '../layout/header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->

    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
                                         <?php 
//    if ($usuario=="si") {
      # code...
    
?>
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->

 </div>
  <?php
     if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_POST['cid'];
          }

$simbolo_moneda="";
       $query=mysqli_query($con,"select * from empresa  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
 //   $porcentaje_impuesto=$row['impuesto'];
     $simbolo_moneda=$row['simbolo_moneda'];
}
?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> AGREGAR PAGO</h3>
                </div><!-- /.box-header -->
                 <a class="btn btn-primary btn-print" href="../pos_medicina/<?php  echo "pos_medicina.php?cid=$cid";?>"    style="height:25%; width:15%; font-size: 12px " role="button">Agregar</a>   
      <br>           
              <a class="btn btn-warning btn-print" href="../paciente/paciente.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>
<br>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      
<?php
$num=0;

    $query=mysqli_query($con,"select * from detalles_pedido d inner join procedimiento_pago p on d.id_producto = p.id_procedimiento_pago 
 where   id_cliente='$cid' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){

            $num=$num+$row['precio_venta']*$row['cantidad'];

  }
?>

      
              <h4><?php
echo $simbolo_moneda.'  '.$num;
?></h4>

            </div>
       
          </div>
        </div>


                <div class="box-body">
                

                   <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                
               
            <th>ID</th>
   
                       
         
                           

    <th>Fecha</th>
      <th>Total</th>

 <th class="btn-print"> Accion </th>
                           



                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from pedidos where id_cliente='$cid' ")or die(mysqli_error());

    
    while($row=mysqli_fetch_array($query)){

$id_pedido=$row['id_pedido'];

     $sum=0;
   $igv=0;   
   $sub=0;   
   $sub_igv=0;

    $query1=mysqli_query($con,"select * from detalles_pedido d inner join procedimiento_pago p on d.id_producto = p.id_procedimiento_pago 
 where  id_pedido='$id_pedido' and id_cliente='$cid'  ")or die(mysqli_error());

    
    while($row1=mysqli_fetch_array($query1)){
               $sub=$sub+$row1['precio_venta']*$row1['cantidad'];

    }
?>
                      <tr >





    

     <td><?php echo $row['id_pedido'];?></td>              
         <td><?php echo $row['fecha'];?></td>     
  
              <td><?php echo $sub;?></td> 
                                        <td>
                                 <?php
                   




                    
                      ?>

<a class="btn btn-danger btn-print" href="<?php  echo "../boletas_ventas/generar_boleta.php?id_pedido=$id_pedido";?>"  target="_blank"  role="button">Factura</a>
<a class="btn btn-primary btn-print" href="<?php  echo "../paciente/eliminar_cita.php?id_cita=$cid";?>"  onClick="return confirm('¿Está seguro de que quieres eliminar??');"  role="button">Eliminar</a>
      <?php
                      
                      ?>






            </td>  
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>

            


                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
         <footer>
          <div class="pull-right">
                 <a href="https://ventadecodigofuente.com/">hospital tusulutionweb Sys</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>
                                         <?php 
 // }    
?>



    <!-- /gauge.js -->
  </body>
</html>
