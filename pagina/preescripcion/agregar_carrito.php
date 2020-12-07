
<?php
include('../layout/dbcon.php');






$medicina = $_POST["medicina"];
$dosis = $_POST["dosis"];
$frecuencia = $_POST["frecuencia"];
$dias = $_POST["dias"];
$instruccion = $_POST["instruccion"];



$sentencia = $base_de_datos->prepare("SELECT * FROM empresa  WHERE id_empresa = ? LIMIT 1;");
$sentencia->execute([1]);
$preescripcion = $sentencia->fetch(PDO::FETCH_OBJ);


session_start();
# Buscar producto dentro del cartito
$indice = false;

# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $preescripcion->medicina = $medicina;
   $preescripcion->dosis = $dosis;
     $preescripcion->frecuencia = $frecuencia;
       $preescripcion->dias = $dias;
     $preescripcion->instruccion = $instruccion;
//        $producto->impu = $producto->precio_venta*$cantidad;
    array_push($_SESSION["carrito_pres"], $preescripcion);
} 
  echo "<script>document.location='../preescripcion/preescripcion_agregar.php'</script>";
//header("Location: ../pos.php");
