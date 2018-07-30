jQuery(document).ready(function(){
  $('#formViajeRedondo').hide();
  $("#soloIda").click(function(){
      	$('#formViajeIda').show(); //muestro mediante id
        $('#formViajeRedondo').hide();
    });

  $("#soloRedondo").click(function(){
      $('#formViajeRedondo').show(); //muestro mediante id
      $('#formViajeIda').hide();
    });

  $("#soloIdaRedondo").click(function(){
        $('#formViajeIda').show(); //muestro mediante id
        $('#formViajeRedondo').hide();
    });

  $("#soloRedondoRedondo").click(function(){
      $('#formViajeIda').show(); //muestro mediante id
      $('#formViajeRedondo').hide();
    });
}); 
