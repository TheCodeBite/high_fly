<?php
require_once 'conexion.php';

function actualizarPorClaseIda(){
	$arreglo;

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

	$asientosTotalesQuery = "select count(*) as tipo from asientos where asientos.tipo= $idClaseI";
	$asientosTotalesResult = $mysqli->query($asientosTotalesQuery);
	$asientosTotalesRow = mysqli_fetch_assoc($asientosTotalesResult);
	$asientosTotalesValor = $asientosTotalesRow ['tipo'];
	
	$asientosDisponibles = $asientosTotalesValor- $asientosCompradosValor;



	$CostoVueloIda = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaIda and vuelos.id_Hora=$idHoraIda and vuelos.origen=$idOrigenIda and vuelos.destino=$idDestinoIda";
	$CostoVueloIdaResult = $mysqli->query($CostoVueloIda);
	$CostoVueloIdaRow = mysqli_fetch_assoc($CostoVueloIdaResult);
	$CostoVueloIdaValor = $CostoVueloIdaRow['costo_Vuelo'];



	if($idClaseI==1){
		$CostoVueloAdultosMIda = ($CostoVueloIdaValor+700)-(($CostoVueloIdaValor+700)*15)/100;
		$CostoVueloAdultosIda = $CostoVueloIdaValor+700;
		$CostoVueloNiñosIda = ($CostoVueloIdaValor+700) - (($CostoVueloIdaValor+700)*15)/100;
	}else if($idClaseI==2){
		$CostoVueloAdultosMIda = ($CostoVueloIdaValor+400)-(($CostoVueloIdaValor+400)*15)/100;
		$CostoVueloAdultosIda = $CostoVueloIdaValor+400;
		$CostoVueloNiñosIda = ($CostoVueloIdaValor+400)- (($CostoVueloIdaValor+400)*15)/100;
	}
	else{

		$CostoVueloAdultosMIda = ($CostoVueloIdaValor+200)-(($CostoVueloIdaValor+200)*15)/100;
		$CostoVueloAdultosIda = $CostoVueloIdaValor+200;
		$CostoVueloNiñosIda = ($CostoVueloIdaValor+200) - (($CostoVueloIdaValor+200)*15)/100;
	}

	header('Content-Type: application/json');

	$arreglo[0] = $CostoVueloAdultosMIda;
	$arreglo[1] = $CostoVueloAdultosIda;
	$arreglo[2] = $CostoVueloNiñosIda;
	$arreglo[3] = $asientosDisponibles;

	return json_encode($arreglo, JSON_FORCE_OBJECT);
	
}
	echo actualizarPorClaseIda();
?>