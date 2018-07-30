<?php
require_once 'conexion.php';

function getCostoTotalRedonod(){

	$cantidadAdultosRedondo = $_POST['adultosRedondo'];
	$cantidadNiñosRedondo = $_POST['nRedondo'];
	$cantidadAdultosMRedodondo = $_POST['adultosMayoresRedondo'];

	$precioAdultosRedondo = $_POST['pAVR'];
	$precioNiñosRedondo = $_POST['pNVR'];
	$precioAdultosMRedodondo = $_POST['pAMVR'];

	//echo "a$cantidadAdultosRedondo b$cantidadNiñosRedondo c$cantidadAdultosMRedodondo d$precioAdultosRedondo e$precioNiñosRedondo f$precioAdultosMRedodondo";

		$costoAdultosRedondo= $cantidadAdultosRedondo*$precioAdultosRedondo;
		$costoNiñosRedondo = $cantidadNiñosRedondo*$precioNiñosRedondo;
		$costoAdultosMayoresRedondo =$cantidadAdultosMRedodondo * $precioAdultosMRedodondo;

	$costoTotal = $costoAdultosRedondo + $costoAdultosMayoresRedondo + $costoNiñosRedondo;
	return $costoTotal;
}
	echo getCostoTotalRedonod();
?>