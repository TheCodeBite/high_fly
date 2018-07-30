<?php
require_once 'conexion.php';

function getPrecioNiñosRedondo(){
	$idClaseR = $_POST['claseVueloR'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaSalidaRedondo = $_POST['fechaSalidaRedondo'];
	$idHoraSalidaRedondoN = $_POST['horaSalidaRedondo'];

	$mysqli = getConn();
	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaSalidaRedondo and vuelos.id_Hora=$idHoraSalidaRedondoN and vuelos.origen=$idOrigenRedondo and vuelos.destino=$idDestinoRedondo";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];
	if($idClaseR==1){
		$CostoVueloNiñosRedondo = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
	}else if($idClaseR==2){
		$CostoVueloNiñosRedondo = ($CostoVueloAdultosMIdaValor+400)-(($CostoVueloAdultosMIdaValor+400)*15)/100;
	}
	else{
		$CostoVueloNiñosRedondo = ($CostoVueloAdultosMIdaValor+200)-(($CostoVueloAdultosMIdaValor+200)*15)/100;
	}

	return $CostoVueloNiñosRedondo;
}
	echo getPrecioNiñosRedondo();
?>