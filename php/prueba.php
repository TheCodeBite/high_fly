<?php
require_once 'conexion.php';

function getPrueba(){
	$idOrigenIda = $_POST['idVuelo'];
	$idDestinoIda = $_POST['idClase'];
	$idFechaIda = $_POST['cantidadPasajeros'];
	$idHoraIda = $_POST['importeTotal'];
	echo "$idOrigenIda      $idDestinoIda      $idFechaIda       $idHoraIda";
	//$asientosDisponibles = "<option value='0'></option>";

	//return $asientosDisponibles;
}
	echo getPrueba();
?>