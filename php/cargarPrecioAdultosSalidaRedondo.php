<?php
require_once 'conexion.php';

function getPrecioAdultosRedondo(){
	$idClaseR = $_POST['claseVueloR'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaSalidaRedondo = $_POST['fechaSalidaRedondo'];
	$idHoraSalidaRedondoA = $_POST['horaSalidaRedondo'];

	$mysqli = getConn();
	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaSalidaRedondo and vuelos.id_Hora=$idHoraSalidaRedondoA and vuelos.origen=$idOrigenRedondo and vuelos.destino=$idDestinoRedondo";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];
	if($idClaseR==1){
		$CostoVueloAdultosRedondo = ($CostoVueloAdultosMIdaValor+700);
	}else if($idClaseR==2){
		$CostoVueloAdultosRedondo = ($CostoVueloAdultosMIdaValor+400);
	}
	else{
		$CostoVueloAdultosRedondo = ($CostoVueloAdultosMIdaValor+200);
	}

	return $CostoVueloAdultosRedondo;
}
	echo getPrecioAdultosRedondo();
?>