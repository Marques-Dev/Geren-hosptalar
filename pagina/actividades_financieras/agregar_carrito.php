
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
# Se ele não existe, nós saímos e criamos
if (!$producto1) {

      echo "<script>document.location='../actividades_financieras/pago_agregar.php?status=4'</script>";
//    header("Location: ../pos.php?status=4");
    exit;
}
# se nao existir uma sessao

session_start();
# buscando produto
$indice = false;
for ($i = 0; $i < count($_SESSION["carrito_actividad"]); $i++) {
    if ($_SESSION["carrito_actividad"][$i]->id_procedimiento_pago === $id_procedimiento_pago) {
        $indice = $i;
        break;
    }
}
# se nao existir agrgamos um novo
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
