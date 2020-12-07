
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">

        <link href="calculator.css" rel="stylesheet">
    <script src="calculator.js"></script>    
  <body class="nav-md">
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


                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title">CALCULADORA </h3>

                </div><!-- /.box-header -->

                









                <div class="box-body">
                
         

 
                        
            

          
      




<table>
      <tr>
        <td colspan="4"><button id="result">0</button></td>
      </tr>
      <tr>
        <td><button onclick="add('1')">1</button></td>
        <td><button onclick="add('2')">2</button></td>
        <td><button onclick="add('3')">3</button></td>
        <td><button onclick="add('+')">+</button></td>
      </tr>
      <tr>
        <td><button onclick="add('4')">4</button></td>
        <td><button onclick="add('5')">5</button></td>
        <td><button onclick="add('6')">6</button></td>
        <td><button onclick="add('-')">-</button></td>
      </tr>
      <tr>
        <td><button onclick="add('7')">7</button></td>
        <td><button onclick="add('8')">8</button></td>
        <td><button onclick="add('9')">9</button></td>
        <td><button onclick="add('*')">*</button></td>
      </tr>
      <tr>
        <td colspan="3"><button onclick="add('0')">0</button></td>
        <td colspan="3"><button onclick="add('/')">/</button></td>          
      </tr>
      <tr>
        <td colspan="2"><button onclick="del()" class="ac">AC</button></td>
        <td><button onclick="add('.')">.</button></td>
        <td><button onclick="calc()">=</button></td>            
      </tr>
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





    <!-- /gauge.js -->
  </body>
</html>
