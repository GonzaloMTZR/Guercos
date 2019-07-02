@extends('layouts.template') 
@section('title', '- Agendar fiesta') 
@section('css')
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/css/select2.min.css')}}" /> 
@endsection 

@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="icofont icofont-plus bg-c-lite-green"></i>
        <div class="d-inline">
          <h4>Agendar fiesta</h4>
          <span>Formulario para agendar una fiesta.</span>
          <!--<form action="POST">
                            <div class="input-group input-group-button input-group-primary">
                                <input type="text" class="form-control" placeholder="Buscar empleado...">
                                <button type="submit " class="btn btn-primary input-group-addon" id="basic-addon1">Buscar</button>
                            </div>
                        </form>-->
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">

  <div class="card-block">
    <form action="/fiestas" method="post" enctype="multipart/form-data">
      @csrf

      <h4 class="sub-title">Datos Personales</h4>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="my-input">Nombre del festejado <label class="text-danger">*</label></label>
          <input name="nombreNino" class="form-control" type="text">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Fecha de cumpleaños <label class="text-danger">*</label></label>
          <input name="fechaCumpleanos" class="form-control" type="date">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Edad <label class="text-danger">*</label></label>
          <input name="edadNino" class="form-control" type="number">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-6">
          <label for="my-input">Nombre del padre (Cliente) <label class="text-danger">*</label></label>
          <input name="nombrePapa" class="form-control" type="text">
        </div>

        <div class="col-sm-6">
          <label for="my-input">Número telefónico de casa <label class="text-danger">*</label></label>
          <input name="telefonoCasa" class="form-control" type="text">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="my-input">Número celular</label>
          <input name="telefonoCel" class="form-control" type="text">
        </div>

        <div class="col-sm-6">
          <label for="my-input">Correo electrónico </label>
          <input name="correo" class="form-control" type="text">
        </div>
      </div>

      <div class="form-group row">

        <div class="col-sm-3">
          <label for="my-input">Municipio <label class="text-danger">*</label></label>
          <input name="ciudad" class="form-control" type="text">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Colonia <label class="text-danger">*</label></label>
          <input name="colonia" class="form-control" type="text">
        </div>

        <div class="col-sm-6">
          <label for="my-input">Calle y número <label class="text-danger">*</label></label>
          <input name="calle" class="form-control" type="text">
        </div>
      </div>
      <br>


      <h4 class="sub-title">Datos de la fiesta</h4>
      <div class="form-group row">
        <div class="col-sm-3">
          <label for="my-input">Fecha del evento <label class="text-danger">*</label></label>
          <input name="fechaFiesta" class="form-control" type="date">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Día de reservación <label class="text-danger">*</label></label>
          <input name="fechaReservacion" class="form-control" type="date">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Hora de inicio <label class="text-danger">*</label></label>
          <input name="horaInicio" class="form-control" type="time">

        </div>

        <div class="col-sm-3">
          <label for="my-input">Hora de termino <label class="text-danger">*</label></label>
          <input name="horaFinal" class="form-control" type="time">
        </div>
      </div>

      <div class="form-group row">

        <div class="col-sm-3">
          <label for="my-input">Pastel </label>
          <input name="pastel" class="form-control" type="text">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Hora de servir <label class="text-danger">*</label></label>
          <input name="horaComida" class="form-control" type="time">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Salón <label class="text-danger">*</label></label>
          <select name="salon" class="form-control">
                            <option selected disable>Seleccione el salón</option>
                            <option value="Salon 1">Salón 1</option>
                            <option value="Salon 2">Salon 2</option>
                            <option value="Pasillo">Pasillo</option>
                        </select>
        </div>

        <div class="col-sm-3">
          <label for="my-input">Estatus de la fiesta <label class="text-danger">*</label></label>
          <select name="estatusFiesta" class="form-control">
                            <option selected disable>Seleccione el estatus</option>
                            <option value="Activo">Activo</option>
                            <option value="Cancelado">Cancelado</option>
                            <option value="Terminado">Terminado</option>
                        </select>
        </div>


      </div>

      <div class="form-group row">

        <div class="col-sm-3">
          <label for="my-input">Piñata </label>
          <input name="piñata" class="form-control" type="text">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Manteles </label>
          <input name="manteles" class="form-control" type="text">
        </div>

        <div class="col-sm-6">
          <label for="my-input">Instrucciones especiales</label>
          <textarea name="notas" class="form-control" cols="30" rows="10"></textarea>
        </div>
      </div>
      <br>

      <h4 class="sub-title">Paquetes</h4>

      <div class="form-group row">

        <div class="col-sm-3">
          <label for="my-input">Paquete <label class="text-danger">*</label></label>
          <select name="idPaquete" class="form-control" id="paquete">
                            <option selected disable>Seleccione el paquete</option>
                            @foreach ($paquetes as $paquete)
                                <option value="{{$paquete->id}}">{{$paquete->descripcionPaquete}}</option>
                            @endforeach
                        </select>
        </div>

        <div class="col-sm-3">
          <label for="my-input">Días <label class="text-danger">*</label></label>
          <select name="idPeriodo" class="form-control" id="dias" required>
                           <option value="0" disable="true" selected="true">Seleccione los dias</option>
                        </select>
        </div>

        <div class="col-sm-3">
          <label for="my-input">Comida Niño <label class="text-danger">*</label></label>
          <select name="comidaNino" class="js-example-basic-sigle">
                            <option selected disable>Seleccione la comida de niños</option>
                            @foreach ($comidas as $comida)
                                <option value="{{$comida->id}}">{{$comida->descripcion}}</option>
                            @endforeach
                        </select>
          <!--<input type="number" name="cantidadAdulto" class="form-control" placeholder="Cantidad" id="">-->
        </div>

        <div class="col-sm-3">
          <label for="my-input">Comida Adulto <label class="text-danger">*</label></label>
          <select name="comidaAdulto" class="js-example-basic-sigle">
                            <option selected disable>Seleccione la comida de adulto</option>
                            @foreach ($comidas as $comida)
                                <option value="{{$comida->id}}">{{$comida->descripcion}}</option>
                            @endforeach
                        </select>
          <!--<input type="number" name="cantidadAdulto" class="form-control" placeholder="Cantidad" id="">-->
        </div>
      </div>

      <hr>


      <div class="form-group">
        <button type="submit" class="col-sm-12 btn btn-success">Agendar</button>
      </div>


    </form>

    <h4 class="sub-title">Pagos</h4>
    <div class="form-group">
      <button data-toggle="modal" data-target="#abonos" class="col-sm-12 btn btn-primary">Anticipo</button>
    </div>

    <div class="form-group">
      <button data-toggle="modal" data-target="#liquidar" class="col-sm-12 btn btn-primary">Liquidar</button>
    </div>

  </div>
</div>

<!-- modal para abonar -->

<div class="modal fade modal-flex" id="abonos" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab-efectivo" role="tab">Pago en efectivo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-tarjeta" role="tab">Pago con tarjeta</a>
          </li>
        </ul>
        <div class="tab-content modal-body">
          <div class="tab-pane active" id="tab-efectivo" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <div class="modal-body">
                <div class="form-group">
                  <label for="">Monto del Abono</label>
                  <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                </div>
              </div>

              <input type="hidden" name="tipoPago" value="Pago en efectivo">

              <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="tab-tarjeta" role="tabpanel">
            <form method="POST" action="">
              @csrf

              <div class="modal-body">
                <div class="form-group">
                  <label for="my-input">Monto del Abono</label>
                  <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                </div>

                <div class="form-group">
                  <label for="my-input">Número de Autorización</label>
                  <input id="my-input" name="pinConfirmacion" class="form-control" type="text">
                </div>

                <input type="hidden" name="tipoPago" value="Pago con tarjeta">
              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal para liquidar -->

<div class="modal fade modal-flex" id="liquidar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab-efectivo" role="tab">Pago en efectivo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-tarjeta" role="tab">Pago con tarjeta</a>
          </li>
        </ul>
        <div class="tab-content modal-body">
          <div class="tab-pane active" id="tab-efectivo" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <div class="modal-body">
                <div class="form-group">
                  <label for="">Monto para liquidar </label>
                  <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                </div>
              </div>

              <input type="hidden" name="tipoPago" value="Pago en efectivo">

              <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="tab-tarjeta" role="tabpane1">
            <form method="POST" action="">
              @csrf

              <div class="modal-body">
                <div class="form-group">
                  <label for="my-input">Monto para liquidar</label>
                  <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                </div>

                <div class="form-group">
                  <label for="my-input">Número de Autorización</label>
                  <input id="my-input" name="pinConfirmacion" class="form-control" type="text">
                </div>

                <input type="hidden" name="tipoPago" value="Pago con tarjeta">
              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  @section('javascripts')
  <script src="https://js.stripe.com/v3/"></script>
  <script type="text/javascript" src="{{asset('admin/bower_components/select2/js/select2.full.min.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-sigle').select2();
    });

    $('#paquete').on('change', function(e) {
      console.log(e);
      var paquete = e.target.value;
      $.get('/dias?paquete=' + paquete, function(data) {
        console.log(data);
        $('#dias').empty();
        $('#dias').append('<option value="0" disable="true" selected="true">Seleccione los días</option>');

        $.each(data, function(index, diasObj) {
          $('#dias').append('<option value="' + diasObj.dias + '">' + diasObj.dias + '</option>');
        })
      });
    });
  </script>

  @endsection 
@endsection