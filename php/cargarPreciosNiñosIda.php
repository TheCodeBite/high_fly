<?php
require_once 'conexion.php';

function getPrecioNiñosIda(){
	$idClaseI = $_POST['claseVueloI'];
	$idOrigenIda = $_POST['origenIda'];
	$idDestinoIda = $_POST['destinoIda'];
	$idFechaIda = $_POST['fechaIda'];
	$idHoraIda = $_POST['horaIda'];

	$mysqli = getConn();
	$CostoVueloNiñosIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaIda and vuelos.id_Hora=$idHoraIda and vuelos.origen=$idOrigenIda and vuelos.destino=$idDestinoIda";
	$CostoVueloNiñosIdaResult = $mysqli->query($CostoVueloNiñosIdaQuery);
	$CostoVueloNiñosIdaRow = mysqli_fetch_assoc($CostoVueloNiñosIdaResult);
	$CostoVueloNiñosIdaValor = $CostoVueloNiñosIdaRow['costo_Vuelo'];
	if($idClaseI==1){
		$CostoVueloNiñosIda = ($CostoVueloNiñosIdaValor+700) - (($CostoVueloNiñosIdaValor+700)*15)/100;
	}else if($idClaseI==2){
		$CostoVueloNiñosIda = ($CostoVueloNiñosIdaValor+400)- (($CostoVueloNiñosIdaValor+400)*15)/100;
	}
	else{
		$CostoVueloNiñosIda = ($CostoVueloNiñosIdaValor+200) - (($CostoVueloNiñosIdaValor+200)*15)/100;
	}

	return $CostoVueloNiñosIda;
}
	echo getPrecioNiñosIda();
?>