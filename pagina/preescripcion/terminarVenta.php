<?php

include('../layout/dbcon.php');

session_start();

$id_sesion = $_POST["id_sesion"];

$id_cliente = $_POST["cliente"];
$id_medico = $_POST["id_medico"];
$historia = $_POST["historia"];


     $fecha = date('Y-m-d');


//$monto_pagado = $_POST["monto_pagado"];




//$vuelto=$total




$sentencia_pedido = $base_de_datos->prepare("INSERT INTO preescripcion(id_cliente, id_medico,historia,id_sesion,fecha) VALUES (?, ?, ?,?,?);");
$sentencia_pedido->execute([$id_cliente, $id_medico,$historia,$id_sesion,$fecha]);

$sentencia = $base_de_datos->prepare("SELECT id_preescripcion FROM preescripcion ORDER BY id_preescripcion DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$id_preescripcion = $resultado === false ? 1 : $resultado->id_preescripcion;



$sentencia = $base_de_datos->prepare("INSERT INTO detalle_preescripcion(medicina, dosis, frecuencia, dias,instruccion,id_preescripcion) VALUES (?, ?, ?, ?, ?, ?);");


foreach ($_SESSION["carrito_pres"] as $preescripcion) {
//	$total += $producto->total;
	$sentencia->execute([$preescripcion->medicina, $preescripcion->dosis, $preescripcion->frecuencia, $preescripcion->dias, $preescripcion->instruccion,$id_preescripcion]);

			/*$update=mysqli_query($con,"update detalle_ingreso set stock_actual=stock_actual-'$producto->cantidad' where estado='abierto' and  	iddetalle_ingreso='$$producto->iddetalle_ingreso' ");
*/
}
//$base_de_datos->commit();
unset($_SESSION["carrito_pres"]);
$_SESSION["carrito_pres"] = [];


//			$update=mysqli_query($con,"update caja set monto=monto+'$sub_total' where estado='abierto' and idsucursal='$idsucursal' ");
  echo "<script>document.location='../preescripcion/preescripcion_agregar.php'</script>";




?>