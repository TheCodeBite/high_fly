<?php
require_once 'conexion.php';

function getCostoTotal(){

	$cantidadAdultos = $_POST['adultos'];
	$cantidadNiños= $_POST['niños'];
	$cantidadAdultosM = $_POST['adultosMayores'];

	$precioAdultosM = $_POST['precioAdultosMayoresIda'];
	$precioAdultos = $_POST['precioAdultosIda'];
	$precioNiños = $_POST['precioAdultosIda'];


	//echo "a$cantidadAdultosRedondo b$cantidadNiñosRedondo c$cantidadAdultosMRedodondo d$precioAdultosRedondo e$precioNiñosRedondo f$precioAdultosMRedodondo";
	//if(is_numeric($precioAdultos)){
		$costoAdultosMayores = $cantidadAdultosM * $precioAdultosM;
		$costoAdultos= $cantidadAdultos*$precioAdultos;
		$costoNiños = $cantidadNiños*$precioNiños;
		$costoTotal = $costoAdultosMayores + $costoAdultos + $costoNiños;	
	/*}else{
		$costoTotal="El precio se dara al completar los campos anteriores";
	}*/
	

	
	return $costoTotal;
}
	echo getCostoTotal();
?>