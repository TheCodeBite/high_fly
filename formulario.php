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
	<div class="container"><br><h1 class="text-center"></h1>
		<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<br><br><br><br><h2>Compre su boleto aqui</h2>					
				</div>
			<div class="col-md-1"></div>
			<div class="col-md-12">
				<div class="tab-content ">					
					<div id="" class="row well oculto bg_formulario">
					<div class="row form-group well">
								<div class="col-md-12 text-center">
									<div class="col-md-12 text-center">
										<label class="text-center">Elija el tipo de viaje de su prefrencia</label>
									</div>

									<div class="col-md-3"></div>
									<div class="col-md-3 ">
										<input type="radio" id="soloIda" name="viajeIda" value="1" checked=""> Sencillo<br>
									</div>
									<div class="col-md-3"> 
										<input type="radio" id="soloRedondo" name="viajeIda" value="2"> viaje redondo<br>
									</div>							
									<div class="col-md-3">
									</div>
								</div>
					</div>
<?php /*---------------------------- VIAJE REDONDO ------------------------------------------------*/ ?>
					<div id="formViajeRedondo"  class="row form-group well">
						<form  id="fr" action="formularioDatosPersonales.php" onsubmit="return validarR(this)" method="post">
							<div class="row form-group">
								<div class="col-md-4">
								</div>
								<div class="col-md-4">
										<div class="col-md-12 text-center">
											<label class="text-center">Escalas de viajes</label>
										</div>
										<select name="IdClase" id="claseVueloR" class="form-control"">
											<option  value="1" name="preferenteIda">Alta</option>
											<option value="2" name="EjecutivaIda" >Media</option>
											<option value="3" name="TuristicaIda" >Baja</option>
										</select>
								</div>
								<div  class="col-md-4"></div>
							</div>
							<div class="row form-group" id="uno">
									<div class="col-md-6 text-center">
										<label class="text-center">Origen</label>
										<select requiered id="origenRedondo" name="origen"  class="form-control">
										</select>
									</div>
									<div class="col-md-6 text-center">
										<label for="">Destino</label>
										<select required id="destinoRedondo" name="destino"  class="form-control">
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
									<select  name="fecha" id="fechaSalidaRedondo" class="form-control">
										<option> Selecciona una fecha</option>
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
									<br><label>Adultos mayores <h4 id="precioAdultosMayoresRedondo">0</h4></label>
									<br><label>Adultos <h4 id="precioAdultosRedondo">0</h4></label>
									<br><label>Niños <h4 id="precioNiñosRedondo"></h4></label>
								</div>
								<div class="col-md-4 well">
									<h4 class="text-center"> <strong> Viaje de regreso</strong></h4>
									<br><label>Adultos mayores <h4 id="pAdultosMayoresR">0</h4></label>
									<br><label>Adultos <h4 id="pAdultosR">0</h4></label>
									<br><label>Niños <h4 id="pNiñosR">0</h4></label>
								</div>
								<div class="col-sm-4 well">
									<h4 class="text-center"> <strong>Viaje redondo</strong> </h4>
									<br><label>Adultos mayores <h4 id="pAMVR" >0</h4></label>
									<br><label>Adultos <h4 id="pAVR">0</h4></label>
									<br><label>Niños <h4 id="pNVR">0</h4></label>
								</div>
							</div>
							<div class=" row form-group ">
								<div class="col-md-5 well">
									<h4 class="text-center"><strong>Asientos disponibles<strong></h4><br>
									<div class="col-md-6 text-center well">
										<label>Viaje de ida</label> <strong> <h5 id="asientosIdaViajeRedondo">0</h5></strong>
									</div>
									<div class="col-md-6 text-center well">
										<label>Viaje de regreso</label> <strong> <h5 id="asientosRegresoViajeRedondo">0</h5></strong>
									</div>
								</div>
								<div id="asientosDisponibles" class="col-md-7 text-center well">
									<div class="col-md-12 text-center">
										<h4><strong>Elije la cantidad de pasajeros<strong></h4> 
									</div>
									
									<div class="col-md-4">
										<label>Adultos</label>
										<select name="adultos" placeholder="Adultos" id="adultosRedondo" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-4">
										<label>Niños</label>
										<select name="niños" placeholder="Niños" id="nRedondo" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-4">
										<label >Adultos mayores</label>
										<select name="adultosMayores" placeholder="Adultos mayores" id="adultosMayoresRedondo" class="form-control" >
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select><br><br><br>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center">
								<h2>Costo actual por</h2>
								<div class="col-md-6 text-right">					
									<h3 id="totalPasajerosRedondo">0 pasajeros</h3>
								</div>
								<br><div class="col-md-6 text-left">
									<div class="price">Costo: <sup class="currency">$</sup><div id="costoTotalRedondo">0.00</div></div>
								</div>
							</div>
					      	<div class="text-center f">
								<button type="submit" class="btn btn-primary" id="btContinuarRedondo" > Continuar</button>
							</div>
						</form>
					</div>		

<?php /*---------------------------- VIAJE IDA ------------------------------------------------*/ ?>
					<div id="formViajeIda" class="row form-group well">
						<form  action="formularioDatosPersonales.php" onsubmit="return validarI(this)" method="post">
							<div class="row form-group">
								<div class="col-md-4"></div>
								<div class="col-md-4">
										<div class="col-md-12 text-center">
											<label>Escalas de viajes</label>
										</div>
										<select name="IdClase" id="claseVueloI" class="form-control" required>
											<option  value="1" name="preferenteIda"> alta</option>
											<option value="2" name="EjecutivaIda" >Media</option>
											<option value="3" name="TuristicaIda" >Baja</option>
										</select>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row form-group text-center" id="uno">
									<div class="col-md-6">
										<label>Origen</label>
										<select name="origen" id="origenIda" class="form-control prueba" required placeholder="Elige un origen">	
										</select>
									</div>
									<div class="col-md-6">
										<label>Destino</label>
										<select name="destino" id="destinoIda" class="form-control prueba" required>	
											<option id="p"> Selecciona un origen</option>
										</select>
									</div>
							</div>
							<div class="row form-group">
								<br><br><div class="col-md-6 text-center">
								  <div class="col-md-6">
									<label>Fechas disponibles</label>
									<select name="fecha" id="fechaIda" class="form-control" required>
										<option> Selecciona un destino</option>
									</select>
								  </div>
								  <div class="col-md-6">
								  	<label>Horas disponibles</label>
									<select name="hora" id="horaIda" class="form-control" required>
										<option> Selecciona una fecha</option>
									</select>
								  </div>
								</div>

								<div class="col-md-6">
									<h4> <strong><center>Precios del vuelo por pasajeros</center></strong> </h4>
									<label>Adultos mayores <h3 id="precioAdultosMayoresIda">0</h3></label>
									<br><label>Adultos  <h3 id="precioAdultosIda">0</h3> </label>
									<br><label>Niños <h3 id="precioNiñosIda">0</h3></label>
								</div>
							</div>
							<div class=" row form-group">
								<div class="col-md-5">
									<br><br><br><h4> <strong><center>Cantidad de asientos disponibles<h1 id="asientosIda"></h1></center></strong></h4>
								</div>
								<div class="col-md-7" class="text-center">
									<div class="col-md-12 text-center">
										<br><h4 for="fullname"> <strong><center>Elije los pasajeros</center></strong> </h4>
									</div>
									<div class="col-md-4">
										<label>Adultos</label>
										<select name="adultos" placeholder="Adultos" id="adultos" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-4">
										<label>Niños</label>
										<select name="niños" placeholder="Niños" id="niños" class="form-control">
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
									<div class="col-md-4">
										<label >Adultos mayores</label>
										<select name="adultosMayores" placeholder="Adultos mayores" id="adultosMayores" class="form-control" >
											<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center">
								<h2>Costo actual por</h2>
								<div class="col-md-6 text-right">							
									<h3 id="totalPasajeros">0 pasajeros</h3>
								</div>
								<div class="col-md-6 text-left">
									<br><div class="price">Costo: <sup class="currency">$</sup><div> <h1 id="costoTotal">0.00</h1> </div></div>
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button  type="submit" class="btn btn-primary" id="btContinuarIda"> Continuar</button>
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
	<script type="text/javascript" src="js/formularioViajeRedondo.js"></script>
	<script type="text/javascript" src="js/formularioSolicitarDatosDelVuelo.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	<script type="text/javascript">
		
		function validarR(f){
			var formulario = document.getElementById("fr");	
			var dato = formulario[0];

			if( ($('#origenRedondo').val() == 0 || $('#destinoRedondo').val() == 0 || $('#horaSalidaRedondo').val() == 0 || $('#fechaSalidaRedondo').val() == 0 || $('#fechaRegresoRedondo)').val() == 0 || $('#horaRegresoRedondo)').val() == 0 ) || ($('#adultosRedondo').val() == 0 && $('#nRedondo').val() == 0 && $('#adultosMayoresRedondo').val() == 0) ){
				alert("Porfavor rellene todos los campos");
				return false;
			}else{
				dato.submit();
				return true;
			}
			
		}

		function validarI(f){
			if( ($('#origenIda').val() == 0 || $('#destinoIda').val() == 0 || $('#fechaIda').val() == 0 ||  $('#horaIda').val() == 0) || ($('#adultos').val() == 0 && $('#niños').val() == 0 && $('#adultosMayores').val() == 0) ){
				alert("Porfavor rellene todos los campos");
				return false;
			}else{
				f.submit();
				return true;
			}
			
		}
	</script>

	</body>
</html>