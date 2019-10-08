$('#paquete').on('change', function (e) {
  console.log(e);
  var paquete = e.target.value;
  $.get('/getDias?paquete=' + paquete, function (data) {
    console.log(data);
    $('#dias').empty();

    $.each(data, function (index, subcatObj) {
        console.log(subcatObj.periodo);
        var option = $('<option></option>').text(subcatObj.periodo).val(subcatObj.periodo);
        $('#dias').append(option);
    });
  });
});


$('#paquete').on('change', function (e) {
  //console.log(e);
  var paquete = e.target.value;
  $.get('/getComida?paquete=' + paquete, function (data) {
    //console.log(data);
    $('#comidaNino').empty();

    $.each(data, function (index, subcatObj) {
        //console.log(subcatObj.descripcion);
        var comida = $('<option name="comidaNino[]" multiple="multiple"></option>').text(subcatObj.descripcion).val(subcatObj.descripcion);
        $('#comidaNino').append(comida);
    });
  });
});
  
$('#paquete').on('change', function (e) {
  //console.log(e);
  var paquete = e.target.value;
  $.get('/getComida?paquete=' + paquete, function (data) {
    //console.log(data);
    $('#comidaAdulto').empty();

    $.each(data, function (index, subcatObj) {
        //console.log(subcatObj.descripcion);
        var comida = $('<option name="comidaAdulto[]" multiple="multiple"></option>').text(subcatObj.descripcion).val(subcatObj.descripcion);
        $('#comidaAdulto').append(comida);
    });
  });
});
  
  
