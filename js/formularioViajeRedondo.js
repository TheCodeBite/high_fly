$(document).ready(function(){ 
   var resultado = "0"
 $.ajax({
    type: 'POST',
    url: 'php/cargarListaOrigenViajeRedondo.php'
  }).done(
    function(listaOrigen){
      $('#origenRedondo').html(listaOrigen)
    }).fail(function(){
    alert('Error al cargar la lista de Origen!!')
  })

  $('#claseVueloR').on('change', function(){

      var idClaseR = $('#claseVueloR').val()
      var idOrigenRedondo = parseInt($('#origenRedondo').val());
      var idDestinoRedondo= parseInt($('#destinoRedondo').val());
      var idFechaSalidaRedondo = parseInt($('#fechaSalidaRedondo').val());
      var idHoraSalidaRedondo = parseInt($('#horaSalidaRedondo').val());
      var idFechaRegresoRedondo = parseInt($('#fechaRegresoRedondo').val());
      var idHoraRegresoRedondo = parseInt($('#horaRegresoRedondo').val()); 
      var cantidadAdultosRedondo = parseInt($('#adultosRedondo').val());
      var cantidadNiñosRedondo = parseInt($('#nRedondo').val());
      var cantidadAdultosMayoresRedondo = parseInt($('#adultosMayoresRedondo') .val());
      var cantidadPasajeros =  parseInt($('#adultosRedondo').val())+ parseInt($('#nRedondo').val()) +  parseInt($('#adultosMayoresRedondo') .val());
      
    $.ajax({
      type: 'POST',
      url: 'php/actulizarDatosPorClase.php',
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo,
              'horaSalidaRedondo': idHoraSalidaRedondo,
              'fechaRegresoRedondo': idFechaRegresoRedondo,
              'horaRegresoRedondo': idHoraRegresoRedondo,
              'claseVueloR': idClaseR
            }
    })
    .done(function(arreglo){
      var costoVueloAdultosMRedondo =arreglo[0];
      var costoVueloAdultosMRegresoRedondo = arreglo[1];

      var costoVueloAdultosRegresoRedondo = arreglo[2];
      var costoVueloAdultosRedondo =arreglo[3];

      var costoVueloNiñosRegresoRedondo = arreglo[4];
      var costoVueloNiñosRedondo = arreglo[5];

      var asientosDisponiblesViajeIRedondo = arreglo[6];
      var asientosDisponiblesViajeRRedondo = arreglo[7] ;

      var costoAdultosMayoresRedondo =  costoVueloAdultosMRedondo+costoVueloAdultosMRegresoRedondo;
      var costoAdultosRedondo = costoVueloAdultosRegresoRedondo+costoVueloAdultosRedondo;
      var costoNiñosRedondo=  costoVueloNiñosRegresoRedondo+costoVueloNiñosRedondo;
      var costoTotal = (cantidadAdultosMayoresRedondo * costoAdultosMayoresRedondo) + (cantidadAdultosRedondo * costoAdultosRedondo) + (costoNiñosRedondo *cantidadNiñosRedondo);
        $('#precioAdultosMayoresRedondo').html(costoVueloAdultosMRedondo)
        $('#precioAdultosRedondo').html(costoVueloAdultosRedondo)
        $('#precioNiñosRedondo').html(costoVueloNiñosRedondo)

        $('#pAdultosMayoresR').html(costoVueloAdultosMRegresoRedondo)
        $('#pAdultosR').html(costoVueloAdultosRegresoRedondo)
        $('#pNiñosR').html(costoVueloNiñosRegresoRedondo)

        $('#pAMVR').html(costoAdultosMayoresRedondo)
        $('#pAVR').html(costoAdultosRedondo)
        $('#pNVR').html(costoNiñosRedondo)

        $('#asientosIdaViajeRedondo').html(asientosDisponiblesViajeIRedondo)
        $('#asientosRegresoViajeRedondo').html(asientosDisponiblesViajeRRedondo)

        $('#totalPasajerosRedondo').html(cantidadPasajeros+" pasejeros")
        $('#costoTotalRedondo').html(costoTotal)
    })
    .fail(function(){
      //alert('Errror al cargar los destinos!!')
    })
  })

  $('#origenRedondo').on('change', function(){
    var id = $('#origenRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaDestinoViajeRedondo.php',
      data: {'origenRedondo': id}
    })
    .done(function(listaDestino){
      $('#destinoRedondo').html(listaDestino)
        $('#precioAdultosMayoresRedondo').html(resultado)
        $('#precioAdultosRedondo').html(resultado)
        $('#precioNiñosRedondo').html(resultado)
        $('#pAdultosMayoresR').html(resultado)
        $('#pAMVR').html(resultado)
        $('#pAdultosR').html(resultado)
        $('#pAVR').html(resultado)
        $('#pNiñosR').html(resultado)
        $('#pNVR').html(resultado)
        $('#asientosIdaViajeRedondo').html(resultado)
        $('#asientosRegresoViajeRedondo').html(resultado)
        $('#totalPasajerosRedondo').html(resultado+" pasejeros")
        $('#costoTotalRedondo').html(resultado)

        $('#fechaSalidaRedondo').html('');$('#fechaSalidaRedondo').append(new Option('Seleccione un destino', true));
        $('#horaSalidaRedondo').html('');$('#horaSalidaRedondo').append(new Option('Selecione una fecha para su viaje de ida', true)); 
        $('#fechaRegresoRedondo').html('');$('#fechaRegresoRedondo').append(new Option('Seleccione un hora para su viaje de ida', true));
        $('#horaRegresoRedondo').html('');$('#horaRegresoRedondo').append(new Option('Selecione una fecha para su viaje de regreso', true)); 
        var selectCantidadAdultosRedondo = $('#adultosRedondo') 
      selectCantidadAdultosRedondo.val($('option:first', selectCantidadAdultosRedondo).val())
      var selectCantidadNiñosRedondo = $('#nRedondo') 
      selectCantidadNiñosRedondo.val($('option:first', selectCantidadNiñosRedondo).val())
      var selectCantidadAdultosMayoresRedondo = $('#adultosMayoresRedondo') 
      selectCantidadAdultosMayoresRedondo.val($('option:first', selectCantidadAdultosMayoresRedondo).val()) 
    })
    .fail(function(){
      alert('Errror al cargar los destinos!!')
    })
  })

  $('#destinoRedondo').on('change', function(){
    var idOrigenRedodondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaFechasSalidaViajeRedondo.php',
      data: {'origenRedondo': idOrigenRedodondo,
              'destinoRedondo':idDestinoRedondo}
    })
    .done(function(listaFechasSalidaVaijeRedondo){
      $('#fechaSalidaRedondo').html(listaFechasSalidaVaijeRedondo)

        $('#horaSalidaRedondo').html('');$('#horaSalidaRedondo').append(new Option('Selecione una fecha para su viaje de ida', true)); 
        $('#fechaRegresoRedondo').html('');$('#fechaRegresoRedondo').append(new Option('Seleccione un hora para su viaje de ida', true));
        $('#horaRegresoRedondo').html('');$('#horaRegresoRedondo').append(new Option('Selecione una fecha para su viaje de regreso', true));


        $('#precioAdultosMayoresRedondo').html(resultado)
        $('#precioAdultosRedondo').html(resultado)
        $('#precioNiñosRedondo').html(resultado)
        $('#pAdultosMayoresR').html(resultado)
        $('#pAMVR').html(resultado)
        $('#pAdultosR').html(resultado)
        $('#pAVR').html(resultado)
        $('#pNiñosR').html(resultado)
        $('#pNVR').html(resultado)
        $('#asientosIdaViajeRedondo').html(resultado)
        $('#asientosRegresoViajeRedondo').html(resultado)
        $('#totalPasajerosRedondo').html(resultado+" pasejeros")
        $('#costoTotalRedondo').html(resultado)

      var selectCantidadAdultosRedondo = $('#adultosRedondo') 
      selectCantidadAdultosRedondo.val($('option:first', selectCantidadAdultosRedondo).val())
      var selectCantidadNiñosRedondo = $('#nRedondo') 
      selectCantidadNiñosRedondo.val($('option:first', selectCantidadNiñosRedondo).val())
      var selectCantidadAdultosMayoresRedondo = $('#adultosMayoresRedondo') 
      selectCantidadAdultosMayoresRedondo.val($('option:first', selectCantidadAdultosMayoresRedondo).val())
    })
    .fail(function(){
      alert('Error al cargar las fechas de salida del viaje de ida!!')
    })
  })

  $('#fechaSalidaRedondo').on('change', function(){
    var idOrigenRedodondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaHorasSalidaViajeRedondo.php',
      data: {'origenRedondo': idOrigenRedodondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo':idFechaSalidaRedondo
            }
    })
    .done(function(listaHorasSalidaViajeRedondo){
      $('#horaSalidaRedondo').html(listaHorasSalidaViajeRedondo)

        $('#fechaRegresoRedondo').html('');$('#fechaRegresoRedondo').append(new Option('Seleccione un hora para su viaje de ida', true));
        $('#horaRegresoRedondo').html('');$('#horaRegresoRedondo').append(new Option('Selecione una fecha para su viaje de regreso', true));

        $('#precioAdultosMayoresRedondo').html(resultado)
        $('#precioAdultosRedondo').html(resultado)
        $('#precioNiñosRedondo').html(resultado)
        $('#pAdultosMayoresR').html(resultado)
        $('#pAMVR').html(resultado)
        $('#pAdultosR').html(resultado)
        $('#pAVR').html(resultado)
        $('#pNiñosR').html(resultado)
        $('#pNVR').html(resultado)
        $('#asientosIdaViajeRedondo').html(resultado)
        $('#asientosRegresoViajeRedondo').html(resultado)
        $('#totalPasajerosRedondo').html(resultado+" pasejeros")
        $('#costoTotalRedondo').html(resultado)

        var selectCantidadAdultosRedondo = $('#adultosRedondo') 
      selectCantidadAdultosRedondo.val($('option:first', selectCantidadAdultosRedondo).val())
      var selectCantidadNiñosRedondo = $('#nRedondo') 
      selectCantidadNiñosRedondo.val($('option:first', selectCantidadNiñosRedondo).val())
      var selectCantidadAdultosMayoresRedondo = $('#adultosMayoresRedondo') 
      selectCantidadAdultosMayoresRedondo.val($('option:first', selectCantidadAdultosMayoresRedondo).val())
    })
    .fail(function(){
      alert('Error al cargar las horas de salida del viaje de ida')
    })
  })

  $('#horaSalidaRedondo').on('change', function(){
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    var idOrigenRedodondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaFechasRegresoViajeRedondo.php',
      data: {'origenRedondo': idOrigenRedodondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo
            }
    })
    .done(function(listaFechasRegresoRedondo){
      $('#fechaRegresoRedondo').html(listaFechasRegresoRedondo)
      var selecthoraRegresoRedondo = $('#horaRegresoRedondo') 
      selecthoraRegresoRedondo.val($('option:first', selecthoraRegresoRedondo).val())

        $('#horaRegresoRedondo').html('');$('#horaRegresoRedondo').append(new Option('Selecione una fecha para su viaje de regreso', true));

        $('#pAdultosMayoresR').html(resultado)
        $('#pAMVR').html(resultado)
        $('#pAdultosR').html(resultado)
        $('#pAVR').html(resultado)
        $('#pNiñosR').html(resultado)
        $('#pNVR').html(resultado)
        $('#asientosRegresoViajeRedondo').html(resultado)
        $('#totalPasajerosRedondo').html(resultado+" pasejeros")
        $('#costoTotalRedondo').html(resultado)

        var selectCantidadAdultosRedondo = $('#adultosRedondo') 
      selectCantidadAdultosRedondo.val($('option:first', selectCantidadAdultosRedondo).val())
      var selectCantidadNiñosRedondo = $('#nRedondo') 
      selectCantidadNiñosRedondo.val($('option:first', selectCantidadNiñosRedondo).val())
      var selectCantidadAdultosMayoresRedondo = $('#adultosMayoresRedondo') 
      selectCantidadAdultosMayoresRedondo.val($('option:first', selectCantidadAdultosMayoresRedondo).val())
    })
    .fail(function(){
      alert('Errror al cargar las fechas del viaje de regreso!!')
    })
  })

  $('#fechaRegresoRedondo').on('change', function(){
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    var idFechaRegresoRedondo = $('#fechaRegresoRedondo').val()
    var idOrigenRedodondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaHorasRegresoViajeRedondo.php',
      data: {'origenRedondo': idOrigenRedodondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo,
              'fechaRegresoRedondo': idFechaRegresoRedondo
            }
    })
    .done(function(listaHorasRegresoRedondo){
      $('#horaRegresoRedondo').html(listaHorasRegresoRedondo)
        $('#pAdultosMayoresR').html(resultado)
        $('#pAMVR').html(resultado)
        $('#pAdultosR').html(resultado)
        $('#pAVR').html(resultado)
        $('#pNiñosR').html(resultado)
        $('#pNVR').html(resultado)
        $('#asientosRegresoViajeRedondo').html(resultado)
        $('#totalPasajerosRedondo').html(resultado+" pasejeros")
        $('#costoTotalRedondo').html(resultado)

      var selectCantidadAdultosRedondo = $('#adultosRedondo') 
      selectCantidadAdultosRedondo.val($('option:first', selectCantidadAdultosRedondo).val())
      var selectCantidadNiñosRedondo = $('#nRedondo') 
      selectCantidadNiñosRedondo.val($('option:first', selectCantidadNiñosRedondo).val())
      var selectCantidadAdultosMayoresRedondo = $('#adultosMayoresRedondo') 
      selectCantidadAdultosMayoresRedondo.val($('option:first', selectCantidadAdultosMayoresRedondo).val())

    })
    .fail(function(){
      alert('Errror al cargar las horas del viaje de regreso')
    })
  })

    //************************PRECIOS POR PASAJEROS VIAJE IDA REDONDO********************
    $('#horaSalidaRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    var idHoraSalidaRedondo = $('#horaSalidaRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    var idClase = $('#claseVueloR').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPrecioAdultosMayoresSalidaRedondo.php',
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo,
              'horaSalidaRedondo': idHoraSalidaRedondo,
              'claseVueloR': idClaseR
            }
    })
    .done(function(precioAdultosMayoresRedondo){
      $('#precioAdultosMayoresRedondo').html(precioAdultosMayoresRedondo)
    })
    .fail(function(){
      alert('Error al cargar el precio de los adultos ayoores!!')
    })
  })
  $('#horaSalidaRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    var idHoraSalidaRedondoA = $('#horaSalidaRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPrecioAdultosSalidaRedondo.php',
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo,
              'horaSalidaRedondo': idHoraSalidaRedondoA,
              'claseVueloR': idClaseR
            }
    })
    .done(function(precioAdultosRedondo){
      $('#precioAdultosRedondo').html(precioAdultosRedondo)
    })
    .fail(function(){
      alert('Error al cargar los precios de los adultos!!')
    })

  })
  $('#horaSalidaRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    var idHoraSalidaRedondoN = $('#horaSalidaRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPreciosNiñosSalidaRedondo.php', 
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo,
              'horaSalidaRedondo': idHoraSalidaRedondoN,
              'claseVueloR': idClaseR
            }
    })
    .done(function(preciosNiñosRedondo){
      $('#precioNiñosRedondo').html(preciosNiñosRedondo)
    })
    .fail(function(){
      alert('Error al cargar los precio de los niños!!')
    })
  })
    //************************PRECIOS POR PASAJEROS VIAJE REGRESO REDONDO********************
    $('#horaRegresoRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaRegresoRedondo = $('#fechaRegresoRedondo').val()
    var idHoraRegresoRedondo = $('#horaRegresoRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPrecioAdultosMayoresRegresoRedondo.php',
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaRegresoRedondo': idFechaRegresoRedondo,
              'horaRegresoRedondo': idHoraRegresoRedondo,
              'claseVueloR': idClaseR
            }
    })
    .done(function(precioAdultosMRegresoR){
      $('#pAdultosMayoresR').html(precioAdultosMRegresoR)
      var suma = parseInt($('#precioAdultosMayoresRedondo').text())+ parseInt(precioAdultosMRegresoR)
      $('#pAMVR').html(suma)
    })
    .fail(function(){
      alert('Error al cargar el precio de los adultos ayoores!!')
    })
  })
  $('#horaRegresoRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaRegresoRedondo = $('#fechaRegresoRedondo').val()
    var idHoraRegresoRedondoA = $('#horaRegresoRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPrecioAdultosRegresoRedondo.php',
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaRegresoRedondo': idFechaRegresoRedondo,
              'horaRegresoRedondo': idHoraRegresoRedondoA,
              'claseVueloR': idClaseR
            }
    })
    .done(function(precioAdultosRegresoR){
      $('#pAdultosR').html(precioAdultosRegresoR)
      var suma = parseInt($('#precioAdultosRedondo').text())+ parseInt(precioAdultosRegresoR)
      $('#pAVR').html(suma)
    })
    .fail(function(){
      alert('Error al cargar los precios de los adultos!!')
    })

  })
  $('#horaRegresoRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaRegresoRedondo = $('#fechaRegresoRedondo').val()
    var idHoraRegresoRedondoN = $('#horaRegresoRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPreciosNiñosRegresoRedondo.php', 
      data: {'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaRegresoRedondo': idFechaRegresoRedondo,
              'horaRegresoRedondo': idHoraRegresoRedondoN,
              'claseVueloR': idClaseR
            }
    })
    .done(function(preciosNiñosRegresoR){
      $('#pNiñosR').html(preciosNiñosRegresoR)
        var suma = parseInt($('#precioNiñosRedondo').text())+ parseInt(preciosNiñosRegresoR)
      $('#pNVR').html(suma)
    })
    .fail(function(){
      alert('Error al cargar los precio de los aaaaaaaaaaaaaaaaaaaaaaaaa!!')
    })
  })
  //*********************************ASIENTOS DISPONIBLES VIAJE REDONDO***********************************************
  $('#horaSalidaRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaSalidaRedondo = $('#fechaSalidaRedondo').val()
    var idHoraSalidaRedondo = $('#horaSalidaRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()

    $.ajax({
      type: 'POST',
      url: 'php/cargarListaAsientosDisponiblesViajeIdaRedondo.php',
      data: { 'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaSalidaRedondo': idFechaSalidaRedondo,
              'horaSalidaRedondo': idHoraSalidaRedondo,
              'claseVueloR': idClaseR
            }
    })
    .done(function(listaAsientosSalidaRedondo){
      $('#asientosIdaViajeRedondo').html(listaAsientosSalidaRedondo)
    })
    .fail(function(){
      alert('Error al cargar los asientos disponibles del viaje de ida!!')
    })
  })

  $('#horaRegresoRedondo').on('change', function(){
    var idClaseR = $('#claseVueloR').val()
    var idFechaRegresoRedondo = $('#fechaRegresoRedondo').val()
    var idHoraRegresoRedondo = $('#horaRegresoRedondo').val()
    var idOrigenRedondo = $('#origenRedondo').val()
    var idDestinoRedondo = $('#destinoRedondo').val()

    $.ajax({
      type: 'POST',
      url: 'php/cargarListaAsientosDisponiblesRegresoViajeRedondo.php',
      data: { 'origenRedondo': idOrigenRedondo,
              'destinoRedondo':idDestinoRedondo,
              'fechaRegresoRedondo': idFechaRegresoRedondo,
              'horaRegresoRedondo': idHoraRegresoRedondo,
              'claseVueloR': idClaseR
            }
        })
    .done(function(listaAsientosRegresoRedondo){
      $('#asientosRegresoViajeRedondo').html(listaAsientosRegresoRedondo)
    })
    .fail(function(){
      alert('Error al cargar los asientos disponibles del viaje de regreso!!')
    })
  })
//**************COSTO TOTAL viaje redondo**********************
  $('#adultosRedondo').on('change', function(){
    var cantidadPasajeros =  parseInt($('#adultosRedondo').val())+ parseInt($('#nRedondo').val()) +  parseInt($('#adultosMayoresRedondo') .val());
    var costoAdultosMRedondo = parseInt($('#pAMVR') .text());
    var costoAdultosRedondo = parseInt($('#pAVR') .text());
    var costoNiñosRedondo = parseInt($('#pNVR') .text());

    var cantidadAdultosRedondo = parseInt($('#adultosRedondo').val());
    var cantidadNiñosRedondo = parseInt($('#nRedondo') .val());
    var cantidadAdultosMayoresRedondo = $('#adultosMayoresRedondo').val();

    $.ajax({
      type: 'POST',
      url: 'php/cargarPasajerosYcosto.php',
      data: { 'adultosRedondo': cantidadAdultosRedondo,
              'nRedondo':cantidadNiñosRedondo,
              'adultosMayoresRedondo': cantidadAdultosMayoresRedondo,
              'pAMVR': costoAdultosMRedondo,
              'pAVR': costoAdultosRedondo,
              'pNVR': costoNiñosRedondo
            }
        })
    .done(function(costoTotalRedondo){
      $('#totalPasajerosRedondo').html(cantidadPasajeros+" pasejeros")
      $('#costoTotalRedondo').html(costoTotalRedondo)
    })
  })

  $('#nRedondo').on('change', function(){
    var costoAdultosMRedondo = parseInt($('#pAMVR') .text());
    var costoAdultosRedondo = parseInt($('#pAVR') .text());
    var costoNiñosRedondo = parseInt($('#pNVR') .text());
    var cantidadAdultosRedondo = parseInt($('#adultosRedondo').val());
    var cantidadNiñosRedondo = parseInt($('#nRedondo').val());
    var cantidadAdultosMayoresRedondo = parseInt($('#adultosMayoresRedondo') .val());
    var cantidadPasajeros =  parseInt($('#adultosRedondo').val())+ parseInt($('#nRedondo').val()) +  parseInt($('#adultosMayoresRedondo') .val());
        $.ajax({
      type: 'POST',
      url: 'php/cargarPasajerosYcosto.php',
      data: { 'adultosRedondo': cantidadAdultosRedondo,
              'nRedondo':cantidadNiñosRedondo,
              'adultosMayoresRedondo': cantidadAdultosMayoresRedondo,
              'pAMVR': costoAdultosMRedondo,
              'pAVR': costoAdultosRedondo,
              'pNVR': costoNiñosRedondo
            }
        })
    .done(function(costoTotalRedondo){
      $('#totalPasajerosRedondo').html(cantidadPasajeros+" pasejeros")
      $('#costoTotalRedondo').html(costoTotalRedondo)
    })
  })
  $('#adultosMayoresRedondo').on('change', function(){
    var costoAdultosMRedondo = parseInt($('#pAMVR') .text());
    var costoAdultosRedondo = parseInt($('#pAVR') .text());
    var costoNiñosRedondo = parseInt($('#pNVR') .text());
    var cantidadAdultosRedondo = parseInt($('#adultosRedondo').val());
    var cantidadNiñosRedondo = parseInt($('#nRedondo').val());
    var cantidadAdultosMayoresRedondo = parseInt($('#adultosMayoresRedondo') .val());
    var cantidadPasajeros =  parseInt($('#adultosRedondo').val())+ parseInt($('#nRedondo').val()) +  parseInt($('#adultosMayoresRedondo') .val());
        $.ajax({
      type: 'POST',
      url: 'php/cargarPasajerosYcosto.php',
      data: { 'adultosRedondo': cantidadAdultosRedondo,
              'nRedondo':cantidadNiñosRedondo,
              'adultosMayoresRedondo': cantidadAdultosMayoresRedondo,
              'pAMVR': costoAdultosMRedondo,
              'pAVR': costoAdultosRedondo,
              'pNVR': costoNiñosRedondo
            }
        })
    .done(function(costoTotalRedondo){
      $('#totalPasajerosRedondo').html(cantidadPasajeros+" pasejeros")
      $('#costoTotalRedondo').html(costoTotalRedondo)
    })
  })



















  

  $.ajax({
    type: 'POST',
    url: 'php/cargarListaOrigen.php'
  }).done(
    function(listaOrigen){
    $('#origenIda').html(listaOrigen)
  }).fail(function(){
    alert('Errror al cargar la lista de Origen!!')
  })

  $('#claseVueloI').on('change', function(){
      var idClaseI = $('#claseVueloI').val()
      var idOrigenIda = parseInt($('#origenIda').val());
      var idDestinoIda= parseInt($('#destinoIda').val());
      var idFechaIda = parseInt($('#fechaIda').val());
      var idHoraIda = parseInt($('#horaIda').val());
      var cantidadAdultosIda = parseInt($('#adultos').val());
      var cantidadNiñosIda = parseInt($('#niños').val());
      var cantidadAdultosMayoresIda = parseInt($('#adultosMayores') .val());
      var cantidadPasajeros =  parseInt($('#adultos').val())+ parseInt($('#niños').val()) +  parseInt($('#adultosMayores') .val());
    $.ajax({
      type: 'POST',
      url: 'php/actulizarDatosPorClaseViajeIda.php',
      data: {'origenIda': idOrigenIda,
              'destinoIda':idDestinoIda,
              'fechaIda': idFechaIda,
              'horaIda': idHoraIda,
              'claseVueloI': idClaseI
            }
    })
    .done(function(arreglo){

      var costoVueloAdultosMIda =arreglo[0];
      var costoVueloAdultosIda =arreglo[1];
      var costoVueloNiñosIda = arreglo[2];
      var asientosDisponiblesViajeIda = arreglo[3];
      var costoTotal = (cantidadAdultosMayoresIda * costoVueloAdultosMIda) + (cantidadAdultosIda * costoVueloAdultosIda) + (costoVueloNiñosIda *cantidadNiñosIda);

        $('#precioAdultosMayoresIda').html(costoVueloAdultosMIda)
        $('#precioAdultosIda').html(costoVueloAdultosIda)
        $('#precioNiñosIda').html(costoVueloNiñosIda)
        $('#asientosIda').html(asientosDisponiblesViajeIda)
        $('#totalPasajeros').html(cantidadPasajeros+" pasejeros")
        $('#costoTotal').html(costoTotal)
    })
    .fail(function(){
      //alert('Errror al cargar los destinos!!')
    })
  })

   $('#origenIda').on('change', function(){
    var id = $('#origenIda').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaDestino.php',
      data: {'origenIda': id}
    })
    .done(function(listaDestino){
      $('#destinoIda').html(listaDestino)
        $('#fechaIda').html('');$('#fechaIda').append(new Option('Seleccione un destino', true));
        $('#horaIda').html('');$('#horaIda').append(new Option('Selecione una fecha', true)); 
       $('#precioAdultosMayoresIda').html(resultado)
       $('#precioAdultosIda').html(resultado)
       $('#precioNiñosIda').html(resultado)
       $('#asientosIda').html(resultado)
       $('#totalPasajeros').html(resultado+" pasejeros")
       $('#costoTotal').html(resultado)
        var selectCantidadAdultos = $('#adultos') 
      selectCantidadAdultos.val($('option:first', selectCantidadAdultos).val())
      var selectCantidadNiños = $('#niños') 
      selectCantidadNiños.val($('option:first', selectCantidadNiños).val())
      var selectCantidadAdultosMayores = $('#adultosMayores') 
      selectCantidadAdultosMayores.val($('option:first', selectCantidadAdultosMayores).val())
    })
    .fail(function(){
      alert('Errror al cargar los destinos')
    })
  })


   $('#destinoIda').on('change', function(){
    var idOrigen = $('#origenIda').val()
    var idDestino = $('#destinoIda').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaFechasIda.php',
      data: {'origenIda': idOrigen,
              'destinoIda':idDestino
            }
    })
    .done(function(listaFechas){
      $('#fechaIda').html(listaFechas)
        $('#horaIda').html('');$('#horaIda').append(new Option('Selecione una fecha', true)); 
       $('#precioAdultosMayoresIda').html(resultado)
       $('#precioAdultosIda').html(resultado)
       $('#precioNiñosIda').html(resultado)
       $('#asientosIda').html(resultado)
       $('#totalPasajeros').html(resultado+" pasejeros")
       $('#costoTotal').html(resultado)
        var selectCantidadAdultos = $('#adultos') 
      selectCantidadAdultos.val($('option:first', selectCantidadAdultos).val())
      var selectCantidadNiños = $('#niños') 
      selectCantidadNiños.val($('option:first', selectCantidadNiños).val())
      var selectCantidadAdultosMayores = $('#adultosMayores') 
      selectCantidadAdultosMayores.val($('option:first', selectCantidadAdultosMayores).val())
    })
    .fail(function(){
      alert('Errror al cargar las fechas')
    })
  })
  $('#fechaIda').on('change', function(){
    var idOrigen = $('#origenIda').val()
    var idDestino = $('#destinoIda').val()
    var idFecha = $('#fechaIda').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarListaHorasIda.php',
      data: {'origenIda': idOrigen,
              'destinoIda':idDestino,
              'fechaIda':idFecha
            }
    })
    .done(function(listaHoras){
      $('#horaIda').html(listaHoras)
      $('#precioAdultosMayoresIda').html(resultado)
       $('#precioAdultosIda').html(resultado)
       $('#precioNiñosIda').html(resultado)
       $('#asientosIda').html(resultado)
       $('#totalPasajeros').html(resultado+" pasejeros")
       $('#costoTotal').html(resultado)
        var selectCantidadAdultos = $('#adultos') 
      selectCantidadAdultos.val($('option:first', selectCantidadAdultos).val())
      var selectCantidadNiños = $('#niños') 
      selectCantidadNiños.val($('option:first', selectCantidadNiños).val())
      var selectCantidadAdultosMayores = $('#adultosMayores') 
      selectCantidadAdultosMayores.val($('option:first', selectCantidadAdultosMayores).val())
    })
    .fail(function(){
      alert('Errror al cargar las horas!!')
    })
  })
  
      $('#horaIda').on('change', function(){
    var idClaseI = $('#claseVueloI').val()
    var idFechaIda = $('#fechaIda').val()
    var idHoraIda = $('#horaIda').val()
    var idOrigenIda = $('#origenIda').val()
    var idDestinoIda = $('#destinoIda').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPrecioAdultosMayoresIda.php',
      data: {'origenIda': idOrigenIda,
              'destinoIda':idDestinoIda,
              'fechaIda': idFechaIda,
              'horaIda': idHoraIda,
              'claseVueloI': idClaseI
            }
    })
    .done(function(precioAdultosMayoresIda){
      $('#precioAdultosMayoresIda').html(precioAdultosMayoresIda)
    })
    .fail(function(){
      alert('Error al cargar el precio de los adultos ayoores!!')
    })
  })
  $('#horaIda').on('change', function(){
    var idClaseI = $('#claseVueloI').val()
    var idFechaIda = $('#fechaIda').val()
    var idHoraIdaA = $('#horaIda').val()
    var idOrigenIda = $('#origenIda').val()
    var idDestinoIda = $('#destinoIda').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPrecioAdultosIda.php',
      data: {'origenIda': idOrigenIda,
              'destinoIda':idDestinoIda,
              'fechaIda': idFechaIda,
              'horaIda': idHoraIdaA,
              'claseVueloI': idClaseI
            }
    })
    .done(function(precioAdultos){
      $('#precioAdultosIda').html(precioAdultos)
    })
    .fail(function(){
      alert('Error al cargar los precios de los adultos!!')
    })
  })
  $('#horaIda').on('change', function(){
    var idClaseI = $('#claseVueloI').val()
    var idFechaIda = $('#fechaIda').val()
    var idhoraIdaN = $('#horaIda').val()
    var idOrigenIda = $('#origenIda').val()
    var idDestinoIda = $('#destinoIda').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargarPreciosNiñosIda.php', 
      data: {'origenIda': idOrigenIda,
              'destinoIda':idDestinoIda,
              'fechaIda': idFechaIda,
              'horaIda': idhoraIdaN,
              'claseVueloI': idClaseI
            }
    })
    .done(function(PreciosNiñosIda){
      $('#precioNiñosIda').html(PreciosNiñosIda)
    })
    .fail(function(){
      alert('Error al cargar los precio de los niños!!')
    })
  }) 

  //******************************ASIENTOS DISPONIBLES VIAJE IDA******************************************************
    $('#horaIda').on('change', function(){
    var idClaseI = $('#claseVueloI').val()
    var idFechaIda = $('#fechaIda').val()
    var idHoraIda = $('#horaIda').val()
    var idOrigenIda = $('#origenIda').val()
    var idDestinoIda = $('#destinoIda').val()

    $.ajax({
      type: 'POST',
      url: 'php/cargarListaAsientosDisponiblesIda.php',
      data: {'origenIda': idOrigenIda,
              'destinoIda':idDestinoIda,
              'fechaIda': idFechaIda,
              'horaIda': idHoraIda,
              'claseVueloI': idClaseI
            }
    })
    .done(function(listaAsientosIda){
      $('#asientosIda').html(listaAsientosIda)
    })
    .fail(function(){
      alert('Error al cargar los asientos disponibles del viaje de ida!!')
    })
  })


//************************************COSTO TOTAL POR IDA************
  $('#adultos').on('change', function(){
    var cantidadPasajeros =  parseInt($('#adultos').val())+ parseInt($('#niños').val()) +  parseInt($('#adultosMayores') .val());
    var costoAdultosM = parseInt($('#precioAdultosMayoresIda') .text());
    var costoAdultos = parseInt($('#precioAdultosIda') .text());
    var costoNiños = parseInt($('#precioNiñosIda') .text());
    var cantidadAdultos = parseInt($('#adultos').val());
    var cantidadNiños = parseInt($('#niños') .val());
    var cantidadAdultosMayores = parseInt($('#adultosMayores').val());
    $.ajax({
      type: 'POST',
      url: 'php/cargarPasajerosYcostoIda.php',
      data: { 'adultos': cantidadAdultos,
              'niños':cantidadNiños,
              'adultosMayores': cantidadAdultosMayores,
              'precioAdultosMayoresIda': costoAdultosM,
              'precioAdultosIda': costoAdultos,
              'precioNiñosIda': costoNiños
            }
        })
    .done(function(costoTotal){
      $('#totalPasajeros').html(cantidadPasajeros+" pasajeros")
      $('#costoTotal').html(costoTotal)
    })
  })

  $('#niños').on('change', function(){
    var costoAdultosM = parseInt($('#precioAdultosMayoresIda') .text());
    var costoAdultos = parseInt($('#precioAdultosIda') .text());
    var costoNiños = parseInt($('#precioNiñosIda') .text());
    var cantidadAdultos = parseInt($('#adultos').val());
    var cantidadNiños = parseInt($('#niños').val());
    var cantidadAdultosMayores = parseInt($('#adultosMayores').val());
    var cantidadPasajeros =  parseInt($('#adultos').val())+ parseInt($('#niños').val()) +  parseInt($('#adultosMayores') .val());
        $.ajax({
      type: 'POST',
      url: 'php/cargarPasajerosYcostoIda.php',
      data: { 'adultos': cantidadAdultos,
              'niños':cantidadNiños,
              'adultosMayores': cantidadAdultosMayores,
              'precioAdultosMayoresIda': costoAdultosM,
              'precioAdultosIda': costoAdultos,
              'precioNiñosIda': costoNiños
            }
        })
    .done(function(costoTotal){
      $('#totalPasajeros').html(cantidadPasajeros+" pasajeros")
      $('#costoTotal').html(costoTotal)
    })
  })
  $('#adultosMayores').on('change', function(){
    var costoAdultosM = parseInt($('#precioAdultosMayoresIda') .text());
    var costoAdultos = parseInt($('#precioAdultosIda') .text());
    var costoNiños = parseInt($('#precioNiñosIda') .text());
    var cantidadAdultos = parseInt($('#adultos').val());
    var cantidadNiños = parseInt($('#niños').val());
    var cantidadAdultosMayores = parseInt($('#adultosMayores') .val());
    var cantidadPasajeros =  parseInt($('#adultos').val())+ parseInt($('#niños').val()) +  parseInt($('#adultosMayores') .val());
    
        $.ajax({
      type: 'POST',
      url: 'php/cargarPasajerosYcostoIda.php',
      data: { 'adultos': cantidadAdultos,
              'niños':cantidadNiños,
              'adultosMayores': cantidadAdultosMayores,
              'precioAdultosMayoresIda': costoAdultosM,
              'precioAdultosIda': costoAdultos,
              'precioNiñosIda': costoNiños
            }
        })
    .done(function(costoTotal){
      $('#totalPasajeros').html(cantidadPasajeros+" pasajeros")
      $('#costoTotal').html(costoTotal)
    })
  })












  //************************funcion de botones****************
 /* $('#btContinuarIda').click(function(){
    var idClase = $('#claseVuelo').val()
    var origenIda = parseInt($('#origenIda').val());
    var destinoIda= parseInt($('#destinoIda').val());
    var fechaIda = parseInt($('#fechaIda').val());
    var horaIda = parseInt($('#horaIda').val());
    var cantidadPasajeros = parseInt($('#totalPasajeros').text());
    var importeTotal = parseInt($('#costoTotal') .text());
    var idVuelo= "select id_vuelo from vuelos where vuelos.id_Fecha="+fechaIda+"and vuelos.id_Hora="+horaIda+" and vuelos.origen="+origenIda+" and vuelos.destino="+destinoIda+"";   

      $.ajax({
      type: 'POST',
      url: 'php/prueba.php',
      data: { 'idVuelo': idVuelo, //arribba el php y los name en los post
              'idClase':idClase,
              'cantidadPasajeros': cantidadPasajeros,
              'importeTotal': importeTotal
            }
        })
    .done(function(prueba){
      alert (""+prueba)
    })
    .fail(function(){
      alert('Error al cargar los asientos disponibles del viaje de regreso!!')
    })
  })
    $('#btContinuarRedondo').click(function(){
    var idClase = $('#claseVuelo').val()
    var origenRedondo = parseInt($('#origenRedondo').val());
    var destinoRedondo= parseInt($('#destinoRedondo').val());
    var fechaSalidaRedondo = parseInt($('#fechaSalidaRedondo').val());
    var horaSalidaRedondo = parseInt($('#horaSalidaRedondo').val());
    var fechaRegresoRedondo = parseInt($('#fechaRegresoRedondo').val());
    var horaRegresoRedondo = parseInt($('#horaRegresoRedondo').val()); 

    var cantidadPasajeros = parseInt($('#totalPasajeros').text());
    var importeTotal = parseInt($('#costoTotal') .text());
    var idVueloIda= "select id_vuelo from vuelos where vuelos.id_Fecha="+fechaSalidaRedondo+"and vuelos.id_Hora="+horaSalidaRedondo+" and vuelos.origen="+origenRedondo+" and vuelos.destino="+destinoRedondo+"";   
    var idVueloRegreso = "select id_vuelo from vuelos where vuelos.id_Fecha="+fechaRegresoRedondo+"and vuelos.id_Hora="+horaRegresoRedondo+" and vuelos.origen="+origenRedondo+" and vuelos.destino="+destinoRedondo+"";
    var cantidadPasajerosR = parseInt($('#totalPasajerosRedondo').text());
    var importeTotalR = parseInt($('#costoTotalRedondo') .text());

    $.ajax({
      type: 'POST',
      url: 'php/enviarDatos.php',
      data: { 'idVueloIda': idVueloIda,
              'idVueloRegreso': idVueloRegreso,
              'idClase':idClase,
              'cantidadPasajerosR': cantidadPasajerosR,
              'importeTotalR': importeTotalR
            }
        })
    .done(function(costoTotal){
      alert ("ggggggggggggggggggggggg")
      $('#totalPasajeros').html(cantidadPasajeros+" pasejeros")
      $('#costoTotal').html(costoTotal)
    })
    .fail(function(){
      alert('Esssssssssssssss!!')
    })
  })*/
})
