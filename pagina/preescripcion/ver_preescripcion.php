
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
     if(isset($_REQUEST['id_caso']))
            {
              $id_caso=$_REQUEST['id_caso'];
            }
            else
            {
            $id_caso=$_POST['id_caso'];
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
                  <h3 class="box-title"> CASO</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="mis_casos.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>
                 <?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from caso s inner join usuario c on s.id_cliente = c.id inner join ubicacion u on u.id_ubicacion = s.id_ubicacion inner join categoria_corte cc on cc.id_categoria_corte = s.id_categoria_corte inner join corte t on t.id_corte = s.id_corte inner join categoria_caso ctc on ctc.id_categoria_caso = s.id_categoria_caso inner join escenario_caso esc on esc.id_escenario_caso = s.id_escenario_caso
 where s.id_caso='$id_caso' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
$id_cliente=$row['id_cliente'];
$id_categoria_caso=$row['id_categoria_caso'];
$id_escenario_caso=$row['id_escenario_caso'];

      // $tipo=$row['tipo'];
       
?>
      
        <form class="form-horizontal" method="post" action="caso_actualizar.php" enctype='multipart/form-data'>
      
    





     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >titulo</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $row['titulo'];?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


                             <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Cliente</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

<input type="text" class="form-control" id="nombre"  name="nombre"  value="<?php echo $row['nombre'];?>" readonly>

                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
 </div>

           <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Ubicacion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

  <input type="text" class="form-control" id="nombre_ubicacion"  name="nombre_ubicacion"  value="<?php echo $row['nombre_ubicacion'];?>" readonly>
    
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
              </div>

           <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Categoria corte</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

  <input type="text" class="form-control" id="nombre_categoria_corte"  name="nombre_categoria_corte"  value="<?php echo $row['nombre_categoria_corte'];?>" readonly>
    
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
              </div>
      <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Corte</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

  <input type="text" class="form-control" id="nombre_corte"  name="nombre_corte"  value="<?php echo $row['nombre_corte'];?>" readonly>
    
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
              </div>


              <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Categoria caso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

  <input type="text" class="form-control" id="nombre_categoria_caso"  name="nombre_categoria_caso"  value="<?php echo $row['nombre_categoria_caso'];?>" readonly>
    
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
              </div>



              <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Escenario caso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

     <input type="text" class="form-control" id="nombre_escenario_caso"  name="nombre_escenario_caso"  value="<?php echo $row['nombre_escenario_caso'];?>" readonly>
       
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
              </div>




     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">


                   <textarea readonly class="form-control" id="descripcion" name="descripcion"><?php echo $row['descripcion'];?></textarea>

                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


         




               <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >fecha audiencia</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="fecha_audiencia"  name="fecha_audiencia"  value="<?php echo $row['fecha_audiencia'];?>"  readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

   



       <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="text" >Tarifa total</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="tarifa_total"  name="tarifa_total" value="<?php echo $row['tarifa_total'];?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



        
          
 








  


     
                
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

                <div class="box-body">
                
<center><h3>HISTORIA DE PAGO</h3></center>
                   <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                
               
                        <th>Fecha</th>
                    <th>Cantidad</th>
                       
         
                           

    <th>Metodo de pago</th>

                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from pago_tarifa 
 where id_caso='$id_caso'")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){




    $i++;
?>
                      <tr >





    

        <td><?php echo $row['fecha'];?></td>              
         <td><?php echo $row['cantidad'];?></td>     
           <td><?php echo $row['metodo_pago'];?></td>                                      

  
            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>

            
<br>
<br>
<center><h3>HISTORIA DE CASO</h3></center>


                   <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-primary">

                
               
                        <th>Fecha</th>
                    <th>Fecha audiencia</th>
                             <th>Notas</th>
         <th>Archivo</th>
                           



                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from audiencia 
 where id_caso='$id_caso'")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){

$id_audiencia=$row['id_audiencia'];


    $i++;
?>
                      <tr >





    

        <td><?php echo $row['fecha'];?></td>              
         <td><?php echo $row['fecha_audiencia'];?></td>     
           <td><?php echo $row['notas'];?></td>                                      
   <td><a class="btn btn-danger btn-print" href="<?php  echo "descargar_directo.php?id_audiencia=$id_audiencia&id_caso=$id_caso";?>"  role="button">Descargar</a>
  
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
