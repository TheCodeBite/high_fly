<?php 
include 'coneccion.php';
$totalServicio=0;

/* DATOS DEL PRIMER FORUMARIO */
$id_Vuelo = $_POST["idVuelo"];
$id_Clase = $_POST["idClase"];
$cantidad_Pasajeros = $_POST["cantidadPasajeros"];
$importeB= $_POST["importeTotal"];
$id_Vuelo_R=0;

if(isset($_POST["idVuelo_Regreso"])){
	$id_Vuelo_R= $_POST["idVuelo_Regreso"];
}
/*CREAR FOLIO*/
$folio="$id_Vuelo"."$id_Vuelo_R";
for($j=strlen($folio);$j<10;$j++){
	$folio="$folio"."0";
}
/*INSERT EN LA BASE DE DATOS*/
for ($i=0; $i < $cantidad_Pasajeros; $i++) {
	$nombre = $_POST["nombre$i"];
	$apellido_P = $_POST["apellido_P$i"];
	$apellido_M = $_POST["apellido_M$i"];
	$edad = $_POST["edad$i"];
	$sexo = $_POST["sexo$i"];
	$telefono = $_POST["telefono$i"];
	$correo = $_POST["correo$i"];
	$asiento= $_POST["asiento$i"];
	$importeBUno=$_POST["boletoP$i"];
	$precioServicio=0;
	$importeTotal=0;

	if(isset($_POST["sillaDeRueda$i"])){
		$sillaDeRueda = $_POST["sillaDeRueda$i"];
	}
	if(isset($_POST["seguroAvion$i"])){
		$seguroAvion= $_POST["seguroAvion$i"];
		$precioServicio=$precioServicio+50;
	}
	if ($asiento!=0) {
			$precioServicio=$precioServicio+50;	
	}else{
		$sql = "SELECT * FROM asientos WHERE tipo=1 and id_Asiento NOT IN (SELECT id_Asiento FROM boleto WHERE id_Vuelo_ida=1)";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$asiento = $row["id_Asiento"];
	}

	$id = $i+1;
	$sql = "INSERT INTO boleto (id_Vuelo_ida,id_Vuelo_Regreso,id_Clase,nombre,apellido_Paterno,apellido_Materno,edad,sexo,telefono,correo,id_Asiento,importe_Servicio,importe_Boleto,importe_Total,folio)
			VALUES ('$id_Vuelo','$id_Vuelo_R',$id_Clase,'$nombre','$apellido_P','$apellido_M',$edad,'$sexo',$telefono,'$correo',$asiento,$precioServicio,$importeBUno,($precioServicio+$importeBUno),$folio)";

	if ($conn->query($sql) === TRUE) {
	    echo "Record insert successfully :D"."\n\n";
	} else {
	    echo "Error insert record: " . $conn->error;
	}
	$totalServicio=$totalServicio+$precioServicio;
	
}

	$importeTotal=$totalServicio+$importeB;
	$conn->close();
	header("Location: pdf.php?importeB=$importeB&precioServicio=$totalServicio&importeTotal=$importeTotal&folio=$folio");
?>