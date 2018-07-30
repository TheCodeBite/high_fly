jQuery(document).ready(function(){
  $('#contenedorFormularioRedondo').hide();
  $('#btContinuarRedondo').hide();
  $("#soloIda").click(function(){
      	$('#contenedorFormularioIda').show(); //muestro mediante id
        $('#contenedorFormularioRedondo').hide();
        $('#btContinuarIda').hida();
        $('#btContinuarRedondo').hide();
    });

  $("#soloRedondo").click(function(){
  		//$('#asientosDisponibles').hide(); //oculto mediante id
  		//$('#precio').hide();
  		//$('#horaDeRegreso').hide();
      $('#contenedorFormularioRedondo').show(); //muestro mediante id
      $('#contenedorFormularioIda').hide();
      $('#btContinuarIda').hide();
      $('#btContinuarRedondo').show();
    });

  $("#elejirAsientos").click(function(){
      $('#asientos').show(); //muestro mediante id
    });

  function showConten() {
        element = document.getElementById("content");
        check = document.getElementById("elejirAsientos");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
}); 
