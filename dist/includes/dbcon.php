<?php
$dbuser = 'root';
$dbpass = '';
$dbname = 'sys-clinica';
$con = mysqli_connect("localhost",$dbuser,$dbpass,$dbname);


// Checando  conexão com o banco

if (mysqli_connect_errno())
  {
  echo "Deu ruim em conectar com o banco: " . mysqli_connect_error();
  }

  date_default_timezone_set("America/Bogota"); 



  try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $dbname, $dbuser, $dbpass);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocorreu um erro no banco de dados erro: " . $e->getMessage();
}
?>


