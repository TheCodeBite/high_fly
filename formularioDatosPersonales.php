<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<?php include 'coneccion.php';
		/* DATOS DEL PRIMER FORUMARIO IDA*/
		$idClaseVuelo = $_POST["IdClase"];
		$origen= $_POST["origen"];
		$destino = $_POST["destino"];
		$fechaIda = $_POST["fecha"];
		$horaIda = $_POST["hora"];

		$cAdultos = $_POST["adultos"];
		$cNiños = $_POST["niños"];
		$cAdultosMayores = $_POST["adultosMayores"];
		$totalP = $cAdultos+$cNiños+$cAdultosMayores;
	?>
	<!-- CONECCION BASE DE DATOS -->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HIGH FLY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">HIGH FLY<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li class="active"><a href="formulario.php">Compra de Boleto</a></li>
						<li><a href="Informacion.php">Información</a></li>
						<li><a href="contact.php">Contactanos</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_5.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Un nuevo mundo a solo un clic.</span>
							<h1>Compra de boleto</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 ">
			<!-- Seleccion de asientos disponibles -->
				<?php
					/*CALCULAR TOTAL*/
					$sql = "SELECT * FROM clases WHERE id_Clase = $idClaseVuelo";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					$precioClase=$row["costo_Clase"];
					/*ID VUELO Y PRECIO*/
					$sql = "SELECT * FROM vuelos WHERE vuelos.id_Fecha=$fechaIda and vuelos.id_Hora=$horaIda and vuelos.origen=$origen and vuelos.destino=$destino";
					$result = $conn->query($sql);

					$row = $result->fetch_assoc();
					$id_Vuelo=$row["id_Vuelo"];
					$costo_Vuelo=$row["costo_Vuelo"];

					if(isset($_POST["fechaRegreso"]) and isset($_POST["horaRegreso"])){
						$fechaRegreso = $_POST["fechaRegreso"];
						$horaRegreso = $_POST["horaRegreso"];

						$sql = "SELECT * FROM vuelos WHERE vuelos.id_Fecha=$fechaRegreso and vuelos.id_Hora=$horaRegreso and vuelos.origen=$destino and vuelos.destino=$origen";
						$result = $conn->query($sql);
						
						$row = $result->fetch_assoc();
						$id_Vuelo_Regreso=$row["id_Vuelo"];
						$costo_Vuelo=$row["costo_Vuelo"]+$costo_Vuelo;
						$precioClase=$precioClase*2;
					}

					$precioAdulto= ($costo_Vuelo+$precioClase)*$cAdultos;
					$precioNino= (($costo_Vuelo+$precioClase)-(($costo_Vuelo+$precioClase)*15)/100)*$cNiños;
					$PrecioViejo=(($costo_Vuelo+$precioClase)-(($costo_Vuelo+$precioClase)*10)/100)*$cAdultosMayores;

						/*ASIENTOS DISPONIBLES*/
						$sql = "SELECT * FROM asientos WHERE tipo=1 and id_Asiento NOT IN (SELECT id_Asiento FROM boleto WHERE id_Vuelo_ida=1)";
						$result = $conn->query($sql);	

						$totalB=$precioAdulto+$precioNino+$PrecioViejo;				
						//echo $idClaseVuelo."|".$origen."|".$destino."|".$totalP."|".$totalB."|".$id_Vuelo;
						$contnino=0;
						$contAdulto=0;
						$contViejo=0;
				 ?>
				
			<!-- Fin de seleccion de asientos-->
				<div class="tab-content text-center">
					<br><br>
					<h1>Registro de datos personales</h1>
					<form action="cargarFormularioDP.php" method="post">
						<?php if(isset($_POST["fechaRegreso"]) and isset($_POST["horaRegreso"])){ ?>
							<select name="idVuelo_Regreso" style="visibility: hidden">
								<option value="<?php echo $id_Vuelo_Regreso;?>"></option>
							</select>
						<?php } ?>
						
						<select name="idVuelo" style="visibility: hidden">
							<option value="<?php echo $id_Vuelo;?>"></option>
						</select>
						<select name="idClase" style="visibility: hidden">
							<option value="<?php echo $idClaseVuelo;?>"></option>
						</select>
						<select name="cantidadPasajeros" style="visibility: hidden">
							<option value="<?php echo $totalP;?>"></option>
						</select>
						<select name="importeTotal" style="visibility: hidden">
							<option value="<?php echo $totalB;?>"></option>
						</select>
						<?php 
						for($cont=0;$cont<$totalP;$cont++){
							$nombre = "nombre$cont";
							$apellido_P = "apellido_P$cont";
							$apellido_M = "apellido_M$cont";
							$sexo = "sexo$cont";
							$edad = "edad$cont";
							$telefono = "telefono$cont";
							$correo = "correo$cont";
							$asiento = "asiento$cont";
							$sillaDeRueda = "sillaDeRueda$cont";
							$seguroAvion="seguroAvion$cont";
							$boletoP="boletoP$cont"
						?>	
						  <div class="col-md-12 well">
							<div class="col-md-12">
								<?php 
									if($contnino<$cNiños){
										$per="NIÑO";
										$edadLimt=15;
										$precioPersona=($costo_Vuelo+$precioClase)-(($costo_Vuelo+$precioClase)*15)/100;
										$contnino++;
									}else if($contAdulto<$cAdultos){
										$per="ADULTO";
										$edadLimt=50;
										$precioPersona=$costo_Vuelo+$precioClase;
										$contAdulto++;
									}else  if($contViejo<$cAdultosMayores){
										$per="3er EDAD";
										$precioPersona=($costo_Vuelo+$precioClase)-(($costo_Vuelo+$precioClase)*10)/100;
										$contViejo++;
									}
								 ?>
								<select name="<?php echo $boletoP;?>" style="visibility: hidden">
									<option value="<?php echo $precioPersona;?>"></option>
								</select>
								<h2>PERSONA <?php echo ($cont+1)." (".$per.")"; ?></h2>
								<div class=" col-md-4 text-center">
									<label>Nombre</label>
									<input type="text" name="<?php echo $nombre;?>" id="nombre" class="form-control" placeholder="Nombre" required>
								</div>
								<div class=" col-md-4 text-center">
									<label> Apellido materno</label>
									<input type="text" name="<?php echo $apellido_M;?>" id="apellidoMaterno" class="form-control" placeholder="Apellido Materno" required>
								</div>
								<div class=" col-md-4 text-center">
									<label> Apellido paterno</label>
									<input type="text" name="<?php echo $apellido_P;?>" id="apellidoPaterno" class="form-control" placeholder="Apellido Paterno" required>
								</div>
							</div>

							<div class="col-md-12">
								<br>
								<div class="col-sm-4 text-center">
									<label>Sexo</label>
									<select name="<?php echo $sexo;?>" id="sexo" class="form-control">
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
									</select>
								</div>
								<div class="col-sm-4 text-center">
									<label>Edad</label>
									<input type="number" placeholder="Edad" name="<?php echo $edad;?>" id="edad" class="form-control" min="0" max="110" step="">
								</div>
								<div class="col-sm-4 text-center">
									<label> Numero de telefono</label>
									<input type="text-center" name="<?php echo $telefono;?>" id="telefono" placeholder="Numero Telefonico" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-8">
									<br><label>Correo electronico</label>
										<input type="gmail" name="<?php echo $correo;?>" class="form-control" placeholder="Correo Electronico">		
								<br><br>
								</div>
							</div>
							<div class="col-md-12 well text-left">
								<h1>Servicios extras</h1>
								<div id="" class="col-md-12 asientos">
									<!--div class="col-md-6">
										<input name="elejirAsientos" class="elejirAsientos" value="1" type="checkbox" onchange="javascript:showContent()">  Elejir asientos
									</div-->
									<div class="col-md-6 text-center">
										<label>Elija los asientos</label>
										<select name="<?php echo $asiento;?>" class="form-control" >
											<option value="0">No elegir uno</option>
											<?php 
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
												$val = $row["id_Asiento"];
												$nombre = $row["nombre"];
												$lugar = $row["lugar"];
											?>
												<option value="<?php echo $val;?>"><?php echo $nombre."(".$lugar.")";?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-6">
										<label>Costo extra por sevicio $50</label>
									</div>
								</div>
								<div id="" class="col-md-12 ">
									<br><div class="col-md-6">
										<input type="checkbox" name="<?php echo $sillaDeRueda;?>" value="1">  Alquilar silla de rueda
									</div>
									<div class="col-md-6">
										<label>Costo extra por sevicio $0</label>
									</div>
								</div>
								<div id="" class="col-md-12 ">
									<br><div class="col-md-6">
									<input type="checkbox" name="<?php echo $seguroAvion;?>" value="1">  Seguro de avión
									</div>
									<div class="col-md-6">
										<label>Costo extra por sevicio $50</label>
									</div>
								</div>
							</div>
						</div><br>
						<?php }?>
						<div class="col-md-12 well">
							<div class="col-md-12">	
								<input type="submit" class="btn btn-primary" value="Generar pago referenciado" target = "_blank"></input>
							</div>
						</div>
					</form><br><br><br><br>
						</div><br>
						</div>

				</div>  
				 <?php $conn->close(); ?>

	</div>	
	</div>
	<footer id="gtco-footer" class="footer-color" role="contentinfo">
		<div class="col-md-12">
			<div class="col-md-4">
				<p class="pull-left">
					<small class="block">&copy; 2018 HIGH FLY Company S.A de S.V. </small></br> 
					<small class="block">Diseño Elabora por DAIKIU Company</small><br>
					<small class="block">Todos los derechos reservados.</small>
				</p>
			</div>
			<div class="col-md-4">
					<ul class="gtco-social-icons">
						<li>Telefono: 961-107-8097</li>					
					</ul>
					<ul class="gtco-social-icons">
						<li>Correo: high_fly@hotmail.com</li>
					</ul>
					<ul class="gtco-social-icons">
						<li>Dirección:4a poniente sur, Mz. 36 Lt. 11 Col. Industrial</li>				
					</ul>
			</div>
			<div class="col-md-4 footer_c">
				<p class="pull-right">
					<ul class="gtco-social-icons pull-right">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
				</p>
			</div>	
		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
  	<script type="text/javascript" src="js/index.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- Formulario -->
	<script src="js/formularioJS.js"></script>
	</body>
</html>

