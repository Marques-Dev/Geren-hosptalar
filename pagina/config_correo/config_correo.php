
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
                      if ($tipo=="administrador") {
                    
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
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> Configuracion servidor correo</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
          
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_empresa=$row['id_empresa'];
?>
 

          

    
        <form class="form-horizontal" method="post" action="config_correo_actualizar.php" enctype='multipart/form-data'>


  


        <br>
        <br>

                <div class="form-group">
          <label class="control-label col-lg-3" for="name">Host </label>
          <div class="col-lg-9">

              <textarea class="form-control" id="host" name="host" required><?php echo $row['host'];?></textarea>
          </div>
        </div>


        <br>
        <br>

                <div class="form-group">
          <label class="control-label col-lg-3" for="name">Usuario </label>
          <div class="col-lg-9">

              <textarea class="form-control" id="username" name="username" required><?php echo $row['username'];?></textarea>
          </div>
        </div>

  
    <br>
        <br>

                <div class="form-group">
          <label class="control-label col-lg-3" for="name">Password </label>
          <div class="col-lg-9">

              <textarea class="form-control" id="password" name="password" required><?php echo $row['password'];?></textarea>
          </div>
        </div>

  




              

                      <div class="form-group">
          <label class="control-label col-lg-3" for="name">Actualizar</label>
          <div class="col-lg-9">
   
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
              
          </div>


        </div>

          
        </form>


<?php 
}?>
          
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
                      }
                      ?>
    <!-- /gauge.js -->
  </body>
</html>
