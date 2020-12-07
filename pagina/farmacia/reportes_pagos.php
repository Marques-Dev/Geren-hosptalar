
<?php include '../layout/header.php';
      $id_usuario=$_SESSION['id'];
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
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <div class="container">
           <div class="col-md-3">
      
           </div>
           <div class="col-md-3">
             <form method="post" action="../farmacia/reportes_pagos_por_fecha.php" enctype="multipart/form-data" class="form-horizontal">
                    <button class="btn btn-lg btn-danger btn-print" id="daterange-btn"  name="buscar_fechas">BUSCAR ENTRE FECHAS</button>
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha inicio</label>
                        <div class="input-group col-sm-8">
                          <input type="date" class="form-control pull-right" id="date" name="fecha_inicio"  required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
            <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha final</label>
                        <div class="input-group col-sm-8">
                          <input type="date" class="form-control pull-right" id="date" name="fecha_final"  required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
              

                 




                    <div class="col-md-12">
                       <div class="col-md-12">
                        
                       
                         </div>

                    </div>

          </form>
           </div>
           <div class="col-md-3">
             
           </div>
       </div>

 <!--end of modal-->

                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>


                  <div class="box-header">
                  <h3 class="box-title"> GANANCIAS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

 
        
         


<?php
$simbolo_moneda="";


       $query=mysqli_query($con,"select * from empresa  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
 //   $porcentaje_impuesto=$row['impuesto'];
     $simbolo_moneda=$row['simbolo_moneda'];
}
     $fecha = date('Y-m-d');
?>



      
      
<?php
$lucro=0;
$num=0;
$precio_venta=0;
$precio_compra=0;
    $query=mysqli_query($con,"select * from pedidos ")or die(mysqli_error());

    
    while($row=mysqli_fetch_array($query)){

$id_pedido=$row['id_pedido'];

    $query1=mysqli_query($con,"select * from detalles_pedido_medicina d inner join producto p on d.id_producto = p.id_pro 
 where   id_pedido='$id_pedido' ")or die(mysqli_error());
    $i=0;
    while($row1=mysqli_fetch_array($query1)){

            $num=$num+$row1['precio_venta']*$row1['cantidad'];
              $lucro=$lucro+$row1['precio_venta']-$row1['precio_compra'];
                   $precio_compra=$precio_compra+$row1['precio_compra'];
                     $precio_venta=$precio_venta+$row1['precio_venta'];
  }
?>



<?php
}
?>










        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      


              <h4><?php
echo 'PRECIO COMPRA=  '.$simbolo_moneda.'  '.$precio_compra;
?></h4>

            </div>
       
          </div>
        </div>

<br>

<br>
<br><br><br>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      


              <h4><?php
echo 'PRECIO VENTA=  '.$simbolo_moneda.'  '.$precio_venta;
?></h4>

            </div>
       
          </div>
        </div>
<br>

<br>
<br><br><br>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
      
      


              <h4><?php
echo 'VENTAS=  '.$simbolo_moneda.'  '.$num;
?></h4>

            </div>
       
          </div>
        </div>

<br>

<br>
<br><br><br>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      


              <h4><?php
echo 'GANANCIAS=  '.$simbolo_moneda.'  '.$lucro;
?></h4>

            </div>
       
          </div>
        </div>

        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>
    <!-- /gauge.js -->



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


                }

              );
              } );
    </script>
  </body>
</html>
