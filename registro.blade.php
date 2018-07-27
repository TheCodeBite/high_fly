<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body id="registroBody">
	<div id="resgistro">
		<h3> Registro </h3>
		<form action="{{ url('registrar') }}" method="POST">
			<nput type="text" name="Nombre" placeholder="Nombre Usuario" required=""><br><br>
			<input type="password" name="contrasenia" placeholder="contraseña"  required=""><br><br>
			<input type="submit" name="insetar">
			{{ csrf_field() }}
		</form>
	</div>


</body>
</html>