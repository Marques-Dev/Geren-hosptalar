<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];

session_start();
array_splice($_SESSION["carrito_pres"], $indice, 1);

  echo "<script>document.location='../preescripcion/preescripcion_agregar.php?status=3'</script>";
  
?>