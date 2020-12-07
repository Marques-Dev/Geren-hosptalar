<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];

session_start();
array_splice($_SESSION["carrito_actividad"], $indice, 1);

  echo "<script>document.location='../actividades_financieras/pago_agregar.php?status=3'</script>";
  
?>