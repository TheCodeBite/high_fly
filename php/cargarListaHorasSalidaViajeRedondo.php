<?php
require_once 'conexion.php';

function getListaHorasSalidaViajeRedondo(){
	$mysqli = getConn();
	$idFechaRedondo = $_POST['fechaSalidaRedondo'];
	$idOrigenRedondo = $_POST['origenRedondo'];
	$idDestinoRedodondo = $_POST['destinoRedondo'];

	$query = "select distinct vuelos.id_Hora,hora from vuelos inner join horas on vuelos.id_Hora = horas.id_Hora where vuelos.id_Fecha='$idFechaRedondo' and vuelos.origen='$idOrigenRedondo' and vuelos.destino='$idDestinoRedodondo'";
	$lista=  $mysqli->query($query);
	$listaHorasSalidaViajeRedondo = '<option value="0">Elige una hora</option>';

	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaHorasSalidaViajeRedondo .= "<option value = $filas[id_Hora]> $filas[hora]</option>";
	}
	return $listaHorasSalidaViajeRedondo;
}
	echo getListaHorasSalidaViajeRedondo();
?>