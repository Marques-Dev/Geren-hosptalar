<?php 
$id=$_SESSION['id'];
?>

<?php

?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                                   <li><a href = "../layout/inicio.php"><i class="fa fa-dashboard"></i> inicio <span class="fa fa-chevron-right"></span></a></li>
           


             

     

                             <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>



                          <li><a><i class="fa fa-database"></i> Medico<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
 
<li><a href="../medico/medico.php">Medico</a></li>
<li><a href="../medico/medico_historial.php">Historico  Medico</a></li>




                    </ul>
                  </li>
                    <?php
                      }
                      ?>

                  <?php

                  
                        if ($tipo=="administrador" or $tipo=="recepcionista" or $tipo=="medico") {
                    
                      ?>
                                  <li><a><i class="fa fa-database"></i> Programação<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
            
<li><a href="../programar/horario_medico.php">Programar</a></li>
<li><a href="../programar/vacaciones.php">Ferias</a></li>




                    </ul>
                  </li>
                    <?php
                      }
                      ?>

                 <?php
                        if ($tipo=="administrador" or $tipo=="recepcionista") {
                    
                      ?>

                              
    <li><a><i class="fa fa-database"></i> Financeiro<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

             
<li><a href="../actividades_financieras/pagos.php">Contas</a></li>
<li><a href="../actividades_financieras/pago_agregar.php">Adicionar conta</a></li>
<li><a href="../procedimiento_pago/procedimiento_pago.php">Procedimento de contas</a></li>
<li><a href="../gastos/gastos.php">Gastos</a></li>
<li><a href="../gastos/gastos_agregar.php">Adicionar gastos</a></li>
<li><a href="../gastos/gastos_categoria.php">Categoria gastos</a></li>
            



                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                      
                                      <?php
                        if ($tipo=="administrador" or $tipo=="recepcionista" or $tipo=="medico") {
                    
                      ?>
                      <li><a><i class="fa fa-database"></i> Pacientes<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
              
<li><a href="../paciente/paciente.php">Lista de pacientes</a></li>
<li><a href="../paciente/pago_paciente_todos.php">Pagos</a></li>


  


                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                      <?php
                        if ($tipo=="administrador" or $tipo=="recepcionista" or $tipo=="medico") {
                    
                      ?>
                 <li><a><i class="fa fa-database"></i> Receitas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
        
<li><a href="../cita/cita.php">Lista de receitas</a></li>
<li><a href="../cita/cita_agregar.php">Adicionar</a></li>
<li><a href="../cita/cita_hoy.php">Todas as Receitas</a></li>




                    </ul>
                  </li>

  <?php
                      }
                      ?>

                                    <?php
                        if ($tipo=="administrador" or $tipo=="farmaceutico") {
                    
                      ?>
                   <li><a><i class="fa fa-database"></i> Medicamentos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                
<li><a href="../medicina/medicina.php">Lista de medicamentos</a></li>
<li><a href="../medicina/medicina_agregar.php">Adicionar medicamento </a></li>






                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                      

                                   <?php
                        if ($tipo=="administrador" or $tipo=="farmaceutico") {
                    
                      ?>
               <li><a><i class="fa fa-database"></i> Farmacia<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                 
<li><a href="../farmacia/pagos.php">Lista de vendas</a></li>
<li><a href="../farmacia/pago_agregar.php">Adicionar farmacia</a></li>
<li><a href="../gastos_farmacia/gastos_farmacia.php">Gastos</a></li>
  <li><a href="../gastos_farmacia/categoria.php">Gastos por categoria</a></li>

  <li><a href="../farmacia/reportes_pagos.php">Contas</a></li>







                    </ul>
                  </li>
  <?php
                      }
                      ?>
                                    <?php
                        if ($tipo=="administrador" or $tipo=="medico") {
                    
                      ?>
 
       <li><a href = "../preescripcion/preescripcion.php"><i class="fa fa-archive"></i> Prescrições<span class="fa fa-chevron-right"></span></a>


             <?php
                      }
                      ?>        

                  
 


                                   <?php
                        if ($tipo=="paciente" ) {
                    
                      ?>
 
       <li><a href = "../cita/cita_paciente.php"><i class="fa fa-archive"></i> Receitas de paciente<span class="fa fa-chevron-right"></span></a>
       <li><a href = "../preescripcion/preescripcion_paciente.php"><i class="fa fa-archive"></i> Prescrições de paciente<span class="fa fa-chevron-right"></span></a>

           <li><a href = "../actividades_financieras/pagos_paciente.php"><i class="fa fa-archive"></i> Contas atenção<span class="fa fa-chevron-right"></span></a>
           <li><a href = "../farmacia/pagos_farmacia_paciente.php"><i class="fa fa-archive"></i> Contas farmacia<span class="fa fa-chevron-right"></span></a>
             <?php
                      }
                      ?>    



    


                                  <?php
        
                      ?>
                    
                
           <?php
                
                    
                      ?>
            

                                       <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>

                                  <li><a><i class="fa fa-user"></i> Recursos humanos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

   <li><a href="../medico/medico.php">Medico</a></li>
        <li><a href="../farmaceutico/farmaceutico.php">Farmaceutico</a></li>

 <li><a href="../recepcionista/recepcionista.php">Recepcionista</a></li>

                       

                    </ul>
                  </li>
                              <?php
                      }
                      ?>     
                      <?php
                      
                      ?>
   



                 <li><a><i class="fa fa-gear"></i> Configurações <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                      <li><a href="../configuracion/configuracion.php">Empresa</a></li>
                                 <?php
                      }
                      ?>

    
                        <li><a href="../otros/editar_password.php">Editar senha</a></li>  
     
                    </ul>

                    
                 <!-- </li>


                             <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                      

                     <li><a><i class="fa fa-database"></i> Base de datos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="../otros/vaciar_bd.php" onClick="return confirm('¿Está seguro de que quieres vaciar la base de datos ??');">Vaciar base de datos</a></li>
       
                       <li><a href="../otros/respaldo_add.php">Respaldo</a></li>

                    </ul>
                  </li>
             <?php
                      }

                      ?> --->


                   
              </div>
             <!--- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>--->

            </div>
