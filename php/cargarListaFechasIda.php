<?php
require_once 'conexion.php';

function getListaFechasIda(){
	$idOrigen = $_POST['origenIda'];
	$idDestino = $_POST['destinoIda'];
	$mysqli = getConn();
	$query = "select distinct vuelos.id_Fecha,fecha from vuelos inner join fechas on vuelos.id_Fecha = fechas.id_Fecha where vuelos.destino=$idDestino and vuelos.origen=$idOrigen";
	$listaFechas = "<option value='0'>Elije una fecha</option>";
	$lista = $mysqli->query($query);
	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaFechas .= "<option value= $filas[id_Fecha]> $filas[fecha]</option>";
	}
	return $listaFechas;
}
	echo getListaFechasIda();
?>