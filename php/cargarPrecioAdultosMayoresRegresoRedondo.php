<?php
require_once 'conexion.php';

function getPrecioAdultosMayoresRedondo(){

	$idClaseR = $_POST['claseVueloR'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaRegresoRedondo = $_POST['fechaRegresoRedondo'];
	$idHoraRegresoRedondo = $_POST['horaRegresoRedondo'];

	$mysqli = getConn();
	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaRegresoRedondo and vuelos.id_Hora=$idHoraRegresoRedondo and vuelos.origen=$idDestinoRedondo and vuelos.destino=$idOrigenRedondo";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];
	if($idClaseR==1){
		$CostoVueloAdultosMRegresoRedondo = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
	}else if($idClaseR==2){
		$CostoVueloAdultosMRegresoRedondo = ($CostoVueloAdultosMIdaValor+400)-(($CostoVueloAdultosMIdaValor+400)*15)/100;
	}
	else{
		$CostoVueloAdultosMRegresoRedondo = ($CostoVueloAdultosMIdaValor+200)-(($CostoVueloAdultosMIdaValor+200)*15)/100;
	}

	return $CostoVueloAdultosMRegresoRedondo;
}
	echo getPrecioAdultosMayoresRedondo();
?>