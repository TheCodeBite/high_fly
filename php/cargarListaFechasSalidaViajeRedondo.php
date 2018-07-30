<?php
require_once 'conexion.php';

function getListaFechasViajeRedondo(){
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedondo = $_POST['destinoRedondo'];
	$mysqli = getConn();

	$query = "select distinct vuelos.id_Fecha,fecha from vuelos inner join fechas on vuelos.id_Fecha = fechas.id_Fecha where vuelos.destino=$idDestinoRedondo and vuelos.origen=$idOrigenRedondo";

	$listaFechasSalidaVaijeRedondo = "<option value='0'>Elije una fecha</option>";
	$lista = $mysqli->query($query);
	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaFechasSalidaVaijeRedondo .= "<option value= $filas[id_Fecha]> $filas[fecha]</option>";
	}
	return $listaFechasSalidaVaijeRedondo;
}
	echo getListaFechasViajeRedondo();
?>