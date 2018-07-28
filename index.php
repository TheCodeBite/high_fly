<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<select id="origenIda" name="origenIda"> 
	</select>

	<select id="destinoIda" name="destinoIda">	
	</select>

	<select id="fechaIda" name="fechaIda">
		<option>fecha</option>
		<option>fecha2</option>

	</select>
	<?php 
	for ($i=0; $i < 4; $i++) { 
		$fila="<div  title='asientos".$i."' "; 
		$fila .="onClick=\"ocultar(event);\">"; 
		$fila .="aqui";
		$fila ."</div>";
		echo $fila; 
	 ?>

	 <div id= "asientos<?php echo $i; ?>">  asientos <?php echo $i; ?> </div>

	 <?php 

			}
	  ?>
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
 	 </script>
  	<script type="text/javascript" src="js/index.js"></script>
  	<script type="text/javascript">
  		
  		function ocultar( event ){

  			var value = event.target.src
  			alert(value)
  			
		  }
  	</script>

</body>
</html>