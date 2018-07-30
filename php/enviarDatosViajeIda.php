<?php 

	$idClaseVueloIda = $_POST["IdClase"];
	$origenIda = $_POST["origenIda"];
	$destinoIda = $_POST["destinoIda"];
	$fechaIda = $_POST["fechaIda"];//no me importa
	$horaIda = $_POST["horaIda"];//no me importa

	$cAdultos = $_POST["adultos"];//no me importa
	$cNiños = $_POST["niños"];//no me importa
	$cAdultosMayores = $_POST["adultosMayores"];//no me importa
	$totalP = $cAdultos+$cNiños+$cAdultosMayores;
	//$costoT = $_POST["costoT"];


	echo $idClaseVueloIda."|".$origenIda."|".$destinoIda."|".$totalP;

//$conn->close();

	header("Location: formularioDatosPersonales.php?id=$totalServicio?precioServicio=$totalServicio");
?>