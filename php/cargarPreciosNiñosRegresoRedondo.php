<?php
require_once 'conexion.php';

function getPrecioNiñosRedondo(){

	$idClaseR = $_POST['claseVueloR'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaRegresoRedondo = $_POST['fechaRegresoRedondo'];
	$idHoraRegresoRedondoN = $_POST['horaRegresoRedondo'];

	$mysqli = getConn();
	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaRegresoRedondo and vuelos.id_Hora=$idHoraRegresoRedondoN and vuelos.origen=$idDestinoRedondo and vuelos.destino=$idOrigenRedondo";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];
	if($idClaseR==1){
		$CostoVueloNiñosRegresoRedondo = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
	}else if($idClaseR==2){
		$CostoVueloNiñosRegresoRedondo = ($CostoVueloAdultosMIdaValor+400)-(($CostoVueloAdultosMIdaValor+400)*15)/100;
	}
	else{
		$CostoVueloNiñosRegresoRedondo = ($CostoVueloAdultosMIdaValor+200)-(($CostoVueloAdultosMIdaValor+200)*15)/100;
	}

	return $CostoVueloNiñosRegresoRedondo;
}
	echo getPrecioNiñosRedondo();
?>