<?php
require_once 'conexion.php';

function getPrecioAdultosIda(){
	$idClaseI = $_POST['claseVueloI'];
	$idOrigenIda = $_POST['origenIda'];
	$idDestinoIda = $_POST['destinoIda'];
	$idFechaIda = $_POST['fechaIda'];
	$idHoraIda = $_POST['horaIda'];
	
	$mysqli = getConn();
	
	/*$sql = "SELECT costo_Clase FROM clases WHERE id_Clase=$idClaseI";
	$result = $mysqli->query($sql);
	$row = mysqli_fetch_assoc($result);
	$precioClase = $row["costo_Clase"]; */

	
	$CostoVueloAdultosIdaQuery = "select costo_Vuelo from vuelos where vuelos.id_Fecha=$idFechaIda and vuelos.id_Hora=$idHoraIda and vuelos.origen=$idOrigenIda and vuelos.destino=$idDestinoIda";
	$CostoVueloAdultosIdaResult = $mysqli->query($CostoVueloAdultosIdaQuery);
	$CostoVueloAdultosIdaRow = mysqli_fetch_assoc($CostoVueloAdultosIdaResult);
	$CostoVueloAdultosIdaValor = $CostoVueloAdultosIdaRow['costo_Vuelo'];
	
	

	if($idClaseI==1){
		$CostoVueloAdultosIda = $CostoVueloAdultosIdaValor+700;
	}else if($idClaseI==2){
		$CostoVueloAdultosIda = $CostoVueloAdultosIdaValor+400;
	}
	else{
		$CostoVueloAdultosIda = $CostoVueloAdultosIdaValor+200;
	}
	//$CostoVueloAdultosIda = $CostoVueloAdultosIdaValor+$precioClase;


	return $CostoVueloAdultosIda;
}
	echo getPrecioAdultosIda();
?>