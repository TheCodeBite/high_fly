<?php
require_once 'conexion.php';

function getAsientosDisponiblesViajeRedondo(){
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaSalidaRedondo = $_POST['fechaSalidaRedondo'];
	$idHoraSalidaRedondo = $_POST['horaSalidaRedondo'];
	$idClaseR = $_POST['claseVueloR'];

	$mysqli = getConn();
	$idVueloSalidaQuery  = "select id_vuelo from vuelos where vuelos.id_Fecha=$idFechaSalidaRedondo and vuelos.id_Hora=$idHoraSalidaRedondo and vuelos.origen=$idOrigenRedondo and vuelos.destino=$idDestinoRedondo";
	$idVueloSalidaResult = $mysqli->query($idVueloSalidaQuery);
	$vuelosSalidaRow = mysqli_fetch_assoc($idVueloSalidaResult);
	$idVueloSalidaValor = $vuelosSalidaRow['id_vuelo'];
	
	
	$asientosCompradosViajeRedondoQuery = "select count(*) as asientos from boleto where boleto.id_Vuelo_Ida=$idVueloSalidaValor and boleto.id_Clase= $idClaseR"; 
	$asientosCompradosViajeRedondoResult = $mysqli->query($asientosCompradosViajeRedondoQuery );
	$asientosCompradosViajeRedondoRow = mysqli_fetch_assoc($asientosCompradosViajeRedondoResult);
	$asientosCompradosViajeRedondoValor = $asientosCompradosViajeRedondoRow ['asientos'];
	//$asientosComprados1 = mysqli_query($mysqli,$asientosComprados);
	
	/*$asientosTotalesQuery = "select capacidad from  vuelos INNER JOIN aviones on vuelos.id_Avion = aviones.id_Avion where vuelos.id_Vuelo=idVueloIdaValor";*/
	$asientosTotalesViajeRedondoQuery = "select count(*) as tipo from asientos where asientos.tipo= $idClaseR";
	$asientosTotalesViajeRedondoResult = $mysqli->query($asientosTotalesViajeRedondoQuery);
	$asientosTotalesViajeRedondoRow = mysqli_fetch_assoc($asientosTotalesViajeRedondoResult);
	$asientosTotalesViajeRedondoValor = $asientosTotalesViajeRedondoRow ['tipo'];

	$asientosDisponiblesViajeRedondo = $asientosTotalesViajeRedondoValor- $asientosCompradosViajeRedondoValor;
	//$asientosDisponibles = "<option value='0'></option>";

	return $asientosDisponiblesViajeRedondo;
}
	echo getAsientosDisponiblesViajeRedondo();
?>