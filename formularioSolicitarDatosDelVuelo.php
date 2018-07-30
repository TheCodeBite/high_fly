<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
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
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="formulario.php">Compra de boleto</a></li>
						<li><a href="informacion.php">Información</a></li>
						<li><a href="contacto.php">Contactanos</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
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
			<div class="col-md-1"></div>
			<div class="col-md-10 ">
				<div class="tab-content "><br>
					<h1 class="text-center">Compre su boleto aqui</h3>
					<div id="" class="row well oculto">
					<div class="row form-group well">
								<div class="col-md-12 text-center">
									<div class="col-md-12 text-center">
										<label class="">Elija el tipo de viaje de su prefrencia</label>
									</div>

									<div class="col-md-3"></div>
									<div class="col-md-3 ">
										<input type="radio" id="soloIda" name="viajeIda" value="1" checked=""> Solo ida<br>
									</div>
									<div class="col-md-3"> 
										<input type="radio" id="soloRedondo" name="viajeIda" value="2"> viaje redondo<br>
									</div>							
									<div class="col-md-3">
									</div>
								</div>
					</div>
<?php /*---------------------------- VIAJE REDONDO ------------------------------------------------*/ ?>
					<div id="formViajeRedondo" class="row form-group well">
						<form  action="formularioDatosPersonales.php" method="post">
							<div class="row form-group">
								<div class="col-md-4">
								</div>
								<div class="col-md-4">
										<div class="col-md-12 text-center">
											<label for="activities">Escalas de viajes</label>
										</div>
										<select name="IdClase" id="claseVuelo" class="form-control"">
											<option value="3" name="TuristicaIda" >Baja</option>
											<option value="2" name="EjecutivaIda" >Media</option>
											<option  value="1" name="preferenteIda"> alta</option>
										</select>
								</div>
								<div  class="col-md-4"></div>
							</div>
							<div class="row form-group" id="uno">
									<div class="col-md-6 text-center">
										<label class="text-center">Origen</label>
										<select id="origenRedondo" name="origen"  class="form-control">
										</select>
									</div>
									<div class="col-md-6 text-center">
										<label for="">Destino</label>
										<select id="destinoRedondo" name="destino"  class="form-control">
											<option> Selecciona un origen</option>
									</select>
									<br>
									</div>

							</div>	

							<div class="row form-group">
								<div class="col-md-6 well text-center">
									<h4 class="text-center"> viaje de ida</h4>
								  <div class="col-md-6">
									<label>Fechas disponibles</label>
									<select name="fecha" id="fechaSalidaRedondo" class="form-control">
										<option> Selecciona un destino</option>
									</select>
								  </div>
								  <div class="col-md-6">
								  	<label>Horas disponibles</label>
									<select name="hora" id="horaSalidaRedondo" class="form-control">
										<option> Selecciona una fecha </option>
									</select>
								  </div>
								</div>
								<div class="col-md-6 well text-center">
									<h4 class="text-center"> viaje de regreso</h4>
								  <div class="col-md-6">
									<label>Fechas disponibles</label>
									<select name="fechaRegreso" id="fechaRegresoRedondo" class="form-control">
										<option> Selecciona una fecha del viaje de ida</option>
									</select>
								  </div>
								  <div class="col-md-6">
								  	<label>Horas disponibles</label>
									<select name="horaRegreso" id="horaRegresoRedondo" class="form-control">
										<option> Selecciona la fecha del viaje de regreso</option>
									</select>
								  </div>
								</div>
							</div>
							<div class=" row form-group text well">
								<h3 class="text-center"> PRECIOS POR TIPOS DE PASAJEROS</h3>
								<div class="col-sm-4 well">
									<h4 class="text-center"> <strong> Viaje de ida </strong> </h4>
									<br><label>Adultos mayores <h4 id="precioAdultosMayoresRedondo"></h4></label>
									<br><label>Adultos <h4 id="precioAdultosRedondo"></h4></label>
									<br><label>Niños <h4 id="precioNiñosRedondo"></h4></label>
								</div>
								<div class="col-md-4 well">
									<h4 class="text-center"> <strong> Viaje de regreso</strong></h4>
									<br><label>Adultos mayores <h4 id="pAdultosMayoresR"></h4></label>
									<br><label>Adultos <h4 id="pAdultosR"></h4></label>
									<br><label>Niños <h4 id="pNiñosR"></h4></label>
								</div>
								<div class="col-sm-4 well">
									<h4 class="text-center"> <strong>Viaje redondo</strong> </h4>
									<br><label>Adultos mayores <h4 id="pAMVR" ></h4></label>
									<br><label>Adultos <h4 id="pAVR"></h4></label>
									<br><label>Niños <h4 id="pNVR"></h4></label>
								</div>
							</div>
							<div class=" row form-group ">
								<div class="col-md-5 well">
									<h4 class="text-center"> Asientos disponibles</h4>
									<div class="col-md-6  text-center well">
										<label> Viaje de ida</label> <strong> <h5 id="asientosIdaViajeRedondo">0</h5></strong>
										<br>
									</div>
									<div class="col-md-6 text-center well">
										<label>Viaje de regreso</label> <strong> <h5 id="asientosRegresoViajeRedondo">0</h5></strong>
									</div>
								</div>
								<div id="asientosDisponibles" class="col-md-7 text-center well">
									<div class="col-md-12 text-center">
										<h4>Elije la cantidad de pasajeros</h4> 
									</div>
									
									<div class="col-md-3">
										<label>Adultos</label>
										<select name="adultos" placeholder="Adultos" id="adultosRedondo" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-3">
										<label>Niños</label>
										<select name="niños" placeholder="Niños" id="nRedondo" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-6">
										<label >Adultos mayores</label>
										<select name="adultosMayores" placeholder="Adultos mayores" id="adultosMayoresRedondo" class="form-control" >
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select><br><br><br>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-12 text-center">
									<label>Costo actual por <h5 id="totalPasajerosRedondo">0 pasajeros</h5><h5 id="costoTotalRedondo">0.00</h5></label><br><br>
								</div>
								<div class="col-md-2"></div>
							</div>
					      	<div class="text-center f">
								<button id="btContinuarRedondo" > Continuar</button>
							</div>
						</form>
					</div>		

<?php /*---------------------------- VIAJE IDA ------------------------------------------------*/ ?>
					<div id="formViajeIda" class="row form-group well">
						<form  action="formularioDatosPersonales.php" method="post">
							<div class="row form-group">
								<div class="col-md-4"></div>
								<div class="col-md-4">
										<div class="col-md-12 text-center">
											<h4>Escalas de viajes</h4>
										</div>
										<select name="IdClase" id="claseVuelo" class="form-control"">
											<option value="3" name="TuristicaIda" >Baja</option>
											<option value="2" name="EjecutivaIda" >Media</option>
											<option  value="1" name="preferenteIda"> alta</option>
										</select>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row form-group text-center" id="uno">
									<div class="col-md-6">
										<label>Origen</label>
										<select name="origen" id="origenIda" class="form-control prueba">	
										</select>
									</div>
									<div class="col-md-6">
										<label>Destino</label>
										<select name="destino" id="destinoIda" class="form-control prueba">	
											<option id="p"> Selecciona un origen</option>
										</select>
									</div>
							</div>
							<div class="row form-group">
								<br><br><div class="col-md-6 text-center">
								  <div class="col-md-6">
									<label>Fechas disponibles</label>
									<select name="fecha" id="fechaIda" class="form-control">
										<option> Selecciona un destino</option>
									</select>
								  </div>
								  <div class="col-md-6">
								  	<label>Horas disponibles</label>
									<select name="hora" id="horaIda" class="form-control">
										<option> Selecciona una fecha</option>
									</select>
								  </div>
								</div>

								<div class="col-md-6">
									<h4> <strong>Precios del vuelo por pasajeros</strong> </h4>
									<label>Adultos mayores <h3 id="precioAdultosMayoresIda"></h3></label>
									<br><label>Adultos  <h3 id="precioAdultosIda"></h3> </label>
									<br><label>Niños <h3 id="precioNiñosIda"> </h3></label>
								</div>
							</div>
							<div class=" row form-group">
								<div class="col-md-5">
									<br><br><br>
									<h4> Cantidad de asientos disponibles <h1 id="asientosIda"> </h1></h4>
								</div>
								<div class="col-md-7" class="text-center">
									<div class="col-md-12 text-center">
										<br><h4 for="fullname">Elije los pasajeros</h4>
									</div>
									<div class="col-md-3">
										<label>Adultos</label>
										<select name="adultos" placeholder="Adultos" id="adultos" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-3">
										<label>Niños</label>
										<select name="niños" placeholder="Niños" id="niños" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-6">
										<label >Adultos mayores</label>
										<select name="adultosMayores" placeholder="Adultos mayores" id="adultosMayores" class="form-control" >
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center"><br><br>
									<h4>Costo actual por <h5 id="totalPasajeros">0 pasajeros</h5><h5 id="costoTotal">0.00</h5></h4><br><br></div>
							<div class="col-md-2"></div>
					      	<div class="text-center ">
								<button id="btContinuarIda"> Continuar</button>
							</div>
						</form>
					</div>
					</div>	
				 </div>
			</div>
		</div>	
	</div>
	
	<footer id="gtco-footer" class="footer-color" role="contentinfo">
		<div class="col-md-12">
			<p class="pull-left">
				<small class="block">&copy; 2018 HIGH FLY Company S.A de S.V. Todos los derechos reservados.</small></br> 
				<small class="block">Diseño Elabora por DAIKIU Company</small>
			</p>
			<p class="pull-right">
				<ul class="gtco-social-icons pull-right">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
				</ul>
			</p>
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
	<script type="text/javascript" src="js/formularioViajeRedondo.js"></script>
	<script type="text/javascript" src="js/formularioSolicitarDatosDelVuelo.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/formularioJS.js"></script>

	</body>
</html>

