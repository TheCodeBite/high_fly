<?php
require_once 'conexion.php';

function getPrecioAdultosRegresoRedondo(){

	$idClaseR = $_POST['claseVueloR'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaRegresoRedondo = $_POST['fechaRegresoRedondo'];
	$idHoraRegresoRedondoA = $_POST['horaRegresoRedondo'];

	$mysqli = getConn();
	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaRegresoRedondo and vuelos.id_Hora=$idHoraRegresoRedondoA and vuelos.origen=$idDestinoRedondo and vuelos.destino=$idOrigenRedondo";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];
	if($idClaseR==1){
		$CostoVueloAdultosRegresoRedondo = ($CostoVueloAdultosMIdaValor+700);
	}else if($idClaseR==2){
		$CostoVueloAdultosRegresoRedondo = ($CostoVueloAdultosMIdaValor+400);
	}
	else{
		$CostoVueloAdultosRegresoRedondo = ($CostoVueloAdultosMIdaValor+200);
	}

	return $CostoVueloAdultosRegresoRedondo;
}
	echo getPrecioAdultosRegresoRedondo();
?>