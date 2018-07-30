<?php 
require_once 'conexion.php';

function getListaOrigen( ){
	$mysqli = getConn();
	$query = "Select distinct origen,nombre from vuelos inner join ciudades on vuelos.origen = ciudades.id_Ciudad";
	$listaOrigen = "<option value='0'>Elije tu origen</option>";
	$lista = $mysqli->query($query);

	while( $filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaOrigen .= "<option value = $filas[origen]> $filas[nombre] </option>";
	}

	return $listaOrigen;
}

echo getListaOrigen();

?>