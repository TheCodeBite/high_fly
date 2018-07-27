<?php
	$mysqli = mysqli_init();
	if (!$mysqli) {
	    die('Falló mysqli_init');
	}

	if (!$mysqli->real_connect('localhost', 'root', '', 'bdTeoria')) {
    	die('Error de conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
	}

	$nombre = $POST["nombre"];
	$contrasenia = $POST["contrasenia"];

	echo $nombre "<br>";
	echo $contrasenia;

	$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> <?php echo $nombre?> </h1>
	<h1> <?php echo $nombre?> </h1>
</body>
</html>