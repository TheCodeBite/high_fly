<?php
require_once 'conexion.php';

function getAsientosDisponiblesViajeRRedondo(){
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaRegresoRedondo = $_POST['fechaRegresoRedondo'];
	$idHoraRegresoRedondo = $_POST['horaRegresoRedondo'];
	$idClaseR = $_POST['claseVueloR'];

	$mysqli = getConn();
	$idVueloRegresoQuery  = "select id_vuelo from vuelos where vuelos.id_Fecha=$idFechaRegresoRedondo and vuelos.id_Hora=$idHoraRegresoRedondo and vuelos.origen=$idDestinoRedondo and vuelos.destino=$idOrigenRedondo"; /// dudaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
	$idVueloRegresoResult = $mysqli->query($idVueloRegresoQuery);
	$vuelosRegresoRow = mysqli_fetch_assoc($idVueloRegresoResult);
	$idVueloRegresoValor = $vuelosRegresoRow['id_vuelo'];
	
	
	$asientosCompradosViajeRRedondoQuery = "select count(*) as asientos from boleto where boleto.id_Vuelo_Ida=$idVueloRegresoValor and boleto.id_Clase= $idClaseR"; 
	$asientosCompradosViajeRRedondoResult = $mysqli->query($asientosCompradosViajeRRedondoQuery );
	$asientosCompradosViajeRRedondoRow = mysqli_fetch_assoc($asientosCompradosViajeRRedondoResult);
	$asientosCompradosViajeRRedondoValor = $asientosCompradosViajeRRedondoRow ['asientos'];
	//$asientosComprados1 = mysqli_query($mysqli,$asientosComprados);
	
	/*$asientosTotalesQuery = "select capacidad from  vuelos INNER JOIN aviones on vuelos.id_Avion = aviones.id_Avion where vuelos.id_Vuelo=idVueloIdaValor";*/
	$asientosTotalesViajeRRedondoQuery = "select count(*) as tipo from asientos where asientos.tipo= $idClaseR";
	$asientosTotalesViajeRRedondoResult = $mysqli->query($asientosTotalesViajeRRedondoQuery);
	$asientosTotalesViajeRRedondoRow = mysqli_fetch_assoc($asientosTotalesViajeRRedondoResult);
	$asientosTotalesViajeRRedondoValor = $asientosTotalesViajeRRedondoRow ['tipo'];

	$asientosDisponiblesViajeRRedondo = $asientosTotalesViajeRRedondoValor- $asientosCompradosViajeRRedondoValor;
	//$asientosDisponibles = "<option value='0'></option>";

	return $asientosDisponiblesViajeRRedondo;
}
	echo getAsientosDisponiblesViajeRRedondo();
?>