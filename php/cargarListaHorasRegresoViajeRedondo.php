<?php
require_once 'conexion.php';

function getListaHorasRegresoViajeRedondo(){
	$mysqli = getConn();
	$idFechaRedondo = $_POST['fechaSalidaRedondo'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedodondo = $_POST['destinoRedondo'];
	$idFechaRegresoRedondo = $_POST['fechaRegresoRedondo'];

	$query = "select distinct vuelos.id_Hora,hora from vuelos inner join horas on vuelos.id_Hora = horas.id_Hora where vuelos.origen=$idDestinoRedodondo and vuelos.destino= $idOrigenRedondo";

	$lista=  $mysqli->query($query);
	$listaHorasRegresoViajeRedondo = '<option value="0">Elige una hora</option>';

	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaHorasRegresoViajeRedondo .= "<option value = $filas[id_Hora]> $filas[hora]</option>";
	}
	return $listaHorasRegresoViajeRedondo;
}
	echo getListaHorasRegresoViajeRedondo();
?>