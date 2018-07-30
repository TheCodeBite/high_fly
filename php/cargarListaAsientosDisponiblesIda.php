<?php
require_once 'conexion.php';

function getAsientosDisponiblesIda(){
	$idOrigenIda = $_POST['origenIda'];
	$idDestinoIda = $_POST['destinoIda'];
	$idFechaIda = $_POST['fechaIda'];
	$idHoraIda = $_POST['horaIda'];
	$idClaseI = $_POST['claseVueloI'];

	$mysqli = getConn();
	$idVueloIdaQuery  = "select id_vuelo from vuelos where vuelos.id_Fecha=$idFechaIda and vuelos.id_Hora=$idHoraIda and vuelos.origen=$idOrigenIda and vuelos.destino=$idDestinoIda";
	$idVueloIdaResult = $mysqli->query($idVueloIdaQuery);
	$vuelosIdaRow = mysqli_fetch_assoc($idVueloIdaResult);
	$idVueloIdaValor = $vuelosIdaRow['id_vuelo'];
	
	
	$asientosCompradosQuery = "select count(*) as asientos from boleto where boleto.id_Vuelo_Ida=$idVueloIdaValor and boleto.id_Clase= $idClaseI"; 
	$asientosCompradosResult = $mysqli->query($asientosCompradosQuery );
	$asientosCompradosRow = mysqli_fetch_assoc($asientosCompradosResult);
	$asientosCompradosValor = $asientosCompradosRow ['asientos'];
	//$asientosComprados1 = mysqli_query($mysqli,$asientosComprados);
	

	
	/*$asientosTotalesQuery = "select capacidad from  vuelos INNER JOIN aviones on vuelos.id_Avion = aviones.id_Avion where vuelos.id_Vuelo=idVueloIdaValor";*/
	$asientosTotalesQuery = "select count(*) as tipo from asientos where asientos.tipo= $idClaseI";
	$asientosTotalesResult = $mysqli->query($asientosTotalesQuery);
	$asientosTotalesRow = mysqli_fetch_assoc($asientosTotalesResult);
	$asientosTotalesValor = $asientosTotalesRow ['tipo'];

	$asientosDisponibles = $asientosTotalesValor- $asientosCompradosValor;
	//$asientosDisponibles = "<option value='0'></option>";

	return $asientosDisponibles;
}
	echo getAsientosDisponiblesIda();
?>