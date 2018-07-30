<?php
require_once 'conexion.php';


function getListaDestino(){
	$mysqli = getConn();
	$idOrigen = $_POST['origenIda'];
	$query = "select distinct destino, nombre from vuelos inner join ciudades on vuelos.destino = ciudades.id_Ciudad where origen = '$idOrigen'";
	$lista=  $mysqli->query($query);
	$listaDestinos = '<option value="0">Elige tu destino</option>';

	while ($filas = $lista -> fetch_array(MYSQLI_ASSOC) ){
		$listaDestinos .= "<option value = $filas[destino]> $filas[nombre]</option>";
	
	}
	return $listaDestinos;
}

echo getListaDestino();

?>