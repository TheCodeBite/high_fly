<?php
require_once 'conexion.php';

function actualizarPorClase(){
	$arreglo;

	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idFechaRegresoRedondo = $_POST['fechaRegresoRedondo'];
	$idHoraRegresoRedondo = $_POST['horaRegresoRedondo'];
	$idClaseR = $_POST['claseVueloR'];
	$idFechaSalidaRedondo = $_POST['fechaSalidaRedondo'];
	$idHoraSalidaRedondo = $_POST['horaSalidaRedondo'];


	$mysqli = getConn();
	$idVueloRegresoQuery  = "select id_vuelo from vuelos where vuelos.id_Fecha=$idFechaRegresoRedondo and vuelos.id_Hora=$idHoraRegresoRedondo and vuelos.origen=$idDestinoRedondo and vuelos.destino=$idOrigenRedondo"; 
	$idVueloRegresoResult = $mysqli->query($idVueloRegresoQuery);
	$vuelosRegresoRow = mysqli_fetch_assoc($idVueloRegresoResult);
	$idVueloRegresoValor = $vuelosRegresoRow['id_vuelo'];

	$asientosCompradosViajeRRedondoQuery = "select count(*) as asientos from boleto where boleto.id_Vuelo_Ida=$idVueloRegresoValor and boleto.id_Clase= $idClaseR"; 
	$asientosCompradosViajeRRedondoResult = $mysqli->query($asientosCompradosViajeRRedondoQuery );
	$asientosCompradosViajeRRedondoRow = mysqli_fetch_assoc($asientosCompradosViajeRRedondoResult);
	$asientosCompradosViajeRRedondoValor = $asientosCompradosViajeRRedondoRow ['asientos'];

	$asientosTotalesViajeRRedondoQuery = "select count(*) as tipo from asientos where asientos.tipo= $idClaseR";
	$asientosTotalesViajeRRedondoResult = $mysqli->query($asientosTotalesViajeRRedondoQuery);
	$asientosTotalesViajeRRedondoRow = mysqli_fetch_assoc($asientosTotalesViajeRRedondoResult);
	$asientosTotalesViajeRRedondoValor = $asientosTotalesViajeRRedondoRow ['tipo'];

	$asientosDisponiblesViajeRRedondo = $asientosTotalesViajeRRedondoValor- $asientosCompradosViajeRRedondoValor;




	$idVueloSalidaQuery  = "select id_vuelo from vuelos where vuelos.id_Fecha=$idFechaSalidaRedondo and vuelos.id_Hora=$idHoraSalidaRedondo and vuelos.origen=$idOrigenRedondo and vuelos.destino=$idDestinoRedondo";
	$idVueloSalidaResult = $mysqli->query($idVueloSalidaQuery);
	$vuelosSalidaRow = mysqli_fetch_assoc($idVueloSalidaResult);
	$idVueloSalidaValor = $vuelosSalidaRow['id_vuelo'];

	$asientosCompradosViajeRedondoQuery = "select count(*) as asientos from boleto where boleto.id_Vuelo_Ida=$idVueloSalidaValor and boleto.id_Clase= $idClaseR"; 
	$asientosCompradosViajeRedondoResult = $mysqli->query($asientosCompradosViajeRedondoQuery );
	$asientosCompradosViajeRedondoRow = mysqli_fetch_assoc($asientosCompradosViajeRedondoResult);
	$asientosCompradosViajeRedondoValor = $asientosCompradosViajeRedondoRow ['asientos'];

	$asientosDisponiblesViajeRedondo = $asientosTotalesViajeRRedondoValor- $asientosCompradosViajeRedondoValor;




	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaSalidaRedondo and vuelos.id_Hora=$idHoraSalidaRedondo and vuelos.origen=$idOrigenRedondo and vuelos.destino=$idDestinoRedondo";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];

	$CostoVueloAdultosMRegresoQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaRegresoRedondo and vuelos.id_Hora=$idHoraRegresoRedondo and vuelos.origen=$idDestinoRedondo and vuelos.destino=$idOrigenRedondo";
	$CostoVueloAdultosMRegresoResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMRegresoRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMRegresoValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];


	if($idClaseR==1){
		$CostoVueloAdultosMRedondo = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
		$CostoVueloAdultosMRedondo = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
		$CostoVueloAdultosMRegresoRedondo = ($CostoVueloAdultosMRegresoValor+700)-(($CostoVueloAdultosMRegresoValor+700)*15)/100;
		$CostoVueloAdultosRegresoRedondo = ($CostoVueloAdultosMRegresoValor+700);
		$CostoVueloAdultosRedondo = ($CostoVueloAdultosMIdaValor+700);
		$CostoVueloNiñosRegresoRedondo = ($CostoVueloAdultosMRegresoValor+700)-(($CostoVueloAdultosMRegresoValor+700)*15)/100;
		$CostoVueloNiñosRedondo = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
	}else if($idClaseR==2){
		$CostoVueloAdultosMRedondo = ($CostoVueloAdultosMIdaValor+400)-(($CostoVueloAdultosMIdaValor+400)*15)/100;
		$CostoVueloAdultosMRegresoRedondo = ($CostoVueloAdultosMRegresoValor+400)-(($CostoVueloAdultosMRegresoValor+400)*15)/100;
		$CostoVueloAdultosRegresoRedondo = ($CostoVueloAdultosMRegresoValor+400);
		$CostoVueloAdultosRedondo = ($CostoVueloAdultosMIdaValor+400);
		$CostoVueloNiñosRegresoRedondo = ($CostoVueloAdultosMRegresoValor+400)-(($CostoVueloAdultosMRegresoValor+400)*15)/100;
		$CostoVueloNiñosRedondo = ($CostoVueloAdultosMIdaValor+400)-(($CostoVueloAdultosMIdaValor+400)*15)/100;
	}
	else{
		$CostoVueloAdultosMRedondo = ($CostoVueloAdultosMIdaValor+200)-(($CostoVueloAdultosMIdaValor+200)*15)/100;
		$CostoVueloAdultosMRegresoRedondo = ($CostoVueloAdultosMRegresoValor+200)-(($CostoVueloAdultosMRegresoValor+200)*15)/100;
		$CostoVueloAdultosRegresoRedondo = ($CostoVueloAdultosMRegresoValor+200);
		$CostoVueloAdultosRedondo = ($CostoVueloAdultosMIdaValor+200);
		$CostoVueloNiñosRegresoRedondo = ($CostoVueloAdultosMRegresoValor+200)-(($CostoVueloAdultosMRegresoValor+200)*15)/100;
		$CostoVueloNiñosRedondo = ($CostoVueloAdultosMIdaValor+200)-(($CostoVueloAdultosMIdaValor+200)*15)/100;
	}

	header('Content-Type: application/json');

	$arreglo[0] = $CostoVueloAdultosMRedondo;
	$arreglo[1] = $CostoVueloAdultosMRegresoRedondo;
	$arreglo[2] = $CostoVueloAdultosRegresoRedondo;
	$arreglo[3] = $CostoVueloAdultosRedondo;
	$arreglo[4] = $CostoVueloNiñosRegresoRedondo;
	$arreglo[5] = $CostoVueloNiñosRedondo;
	$arreglo[6] = $asientosDisponiblesViajeRedondo;
	$arreglo[7] = $asientosDisponiblesViajeRRedondo;

	
	return json_encode($arreglo, JSON_FORCE_OBJECT);
	
}
	echo actualizarPorClase();
?>