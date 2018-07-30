<?php 

	$idClaseVuelo = $_POST["claseVuelo"];//ya
	$origenRedondo = $_POST["origenRedondo"];//ya
	$destinoRedondo = $_POST["destinoRedondo"];//ya
	$fechaSalidaRedondo = $_POST["fechaSalidaRedondo"];//ya
	$horaSalidaRedondo = $_POST["horaSalidaRedondo"];//ya
	$fechaRegresodaRedondo = $_POST["fechaRegresoRedondo"];
	$horaRegresoRedondo = $_POST["horaRegresoRedondo"];

	$cAdultosRedondo = $_POST["adultosRedondo"];//ya
	$cNiñosRedondo = $_POST["nRedondo"];//ya
	$cAdultosMayoresRedondo = $_POST["adultosMayoresRedondo"];//ya
	
$conn->close();

	header("Location: pdf.php?precioServicio=$totalServicio");
?>