<?php
require_once 'conexion.php';

function getPrecioAdultosMayoresIda(){
	$idClaseI = $_POST['claseVueloI'];
	$idOrigenIda = $_POST['origenIda'];
	$idDestinoIda = $_POST['destinoIda'];
	$idFechaIda = $_POST['fechaIda'];
	$idHoraIda = $_POST['horaIda'];

	$mysqli = getConn();
	$CostoVueloAdultosMIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaIda and vuelos.id_Hora=$idHoraIda and vuelos.origen=$idOrigenIda and vuelos.destino=$idDestinoIda";
	$CostoVueloAdultosMIdaResult = $mysqli->query($CostoVueloAdultosMIdaQuery);
	$CostoVueloAdultosMIdaRow = mysqli_fetch_assoc($CostoVueloAdultosMIdaResult);
	$CostoVueloAdultosMIdaValor = $CostoVueloAdultosMIdaRow['costo_Vuelo'];
	if($idClaseI==1){
		$CostoVueloAdultosMIda = ($CostoVueloAdultosMIdaValor+700)-(($CostoVueloAdultosMIdaValor+700)*15)/100;
	}else if($idClaseI==2){
		$CostoVueloAdultosMIda = ($CostoVueloAdultosMIdaValor+400)-(($CostoVueloAdultosMIdaValor+400)*15)/100;
	}
	else{
		$CostoVueloAdultosMIda = ($CostoVueloAdultosMIdaValor+200)-(($CostoVueloAdultosMIdaValor+200)*15)/100;
	}

	return $CostoVueloAdultosMIda;
}
	echo getPrecioAdultosMayoresIda();
?>