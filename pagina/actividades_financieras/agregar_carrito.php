
<?php
include('../layout/dbcon.php');
if (!isset($_POST["id_procedimiento_pago"])) {
    return;
}





$cantidad = $_POST["cantidad"];
$id_procedimiento_pago = $_POST["id_procedimiento_pago"];



$sentencia = $base_de_datos->prepare("SELECT * FROM procedimiento_pago  WHERE id_procedimiento_pago = ? LIMIT 1;");
$sentencia->execute([$id_procedimiento_pago]);
$producto1 = $sentencia->fetch(PDO::FETCH_OBJ);
# Si no existe, salimos y lo indicamos
if (!$producto1) {

      echo "<script>document.location='../actividades_financieras/pago_agregar.php?status=4'</script>";
//    header("Location: ../pos.php?status=4");
    exit;
}
# Si no hay existencia...

session_start();
# Buscar producto dentro del cartito
$indice = false;
for ($i = 0; $i < count($_SESSION["carrito_actividad"]); $i++) {
    if ($_SESSION["carrito_actividad"][$i]->id_procedimiento_pago === $id_procedimiento_pago) {
        $indice = $i;
        break;
    }
}
# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $producto1->cantidad = $cantidad;
    $producto1->total = $producto1->precio_venta*$cantidad;
       $producto1->nombre = $producto1->nombre;
              $producto1->id_procedimiento_pago = $id_procedimiento_pago;
//        $producto->impu = $producto->precio_venta*$cantidad;
    array_push($_SESSION["carrito_actividad"], $producto1);
} else {

    $_SESSION["carrito_actividad"][$indice]->cantidad++;
        $_SESSION["carrito_actividad"][$indice]->total = $_SESSION["carrito_actividad"][$indice]->cantidad * $_SESSION["carrito_actividad"][$indice]->precio_venta;


}
  echo "<script>document.location='../actividades_financieras/pago_agregar.php'</script>";
//header("Location: ../pos.php");
