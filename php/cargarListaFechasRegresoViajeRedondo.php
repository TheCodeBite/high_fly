<?php
require_once 'conexion.php';

function getListaFechasViajeRedondo(){
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$idfechaSalidaRedondo = $_POST['fechaSalidaRedondo'];
	$mysqli = getConn();

	$query = "select distinct vuelos.id_Fecha vFecha,fecha from vuelos inner join fechas on vuelos.id_Fecha = fechas.id_Fecha where vuelos.destino=$idOrigenRedondo  and vuelos.origen=$idDestinoRedondo";

	$listaFechasSalidaVaijeRedondo = "<option value='0'>Elije una fecha</option>";
	$lista = $mysqli->query($query);
	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaFechasSalidaVaijeRedondo .= "<option value= $filas[vFecha]> $filas[fecha]</option>";
	}
	return $listaFechasSalidaVaijeRedondo;
}
	echo getListaFechasViajeRedondo();
?>