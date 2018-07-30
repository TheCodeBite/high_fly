<?php
require_once 'conexion.php';

function getListaHoras(){
	$mysqli = getConn();
	$idFecha = $_POST['fechaIda'];
	$idOrigen = $_POST['origenIda'];
	$idDestino = $_POST['destinoIda'];

	$query = "select distinct vuelos.id_Hora,hora from vuelos inner join horas on vuelos.id_Hora = horas.id_Hora where vuelos.id_Fecha='$idFecha' and vuelos.origen='$idOrigen' and vuelos.destino='$idDestino'";
	$lista=  $mysqli->query($query);
	$listaHoras = '<option value="0">Elige una hora</option>';

	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaHoras .= "<option value = $filas[id_Hora]> $filas[hora]</option>";
	}
	return $listaHoras;
}
	echo getListaHoras();
?>