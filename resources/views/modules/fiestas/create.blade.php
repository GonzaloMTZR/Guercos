@extends('layouts.template') 
@section('title', '- Agendar fiesta') 
@section('css')
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet"/>
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

@if($errors)
@foreach($errors->all() as $error)
    <div class="alert alert-danger background-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled text-white"></i>
        </button>
        <p>{{ $error  }}</p>
    </div>
@endforeach
@endif

<div class="card">

  <div class="card-block">
    <form action="/fiestas" method="post" enctype="multipart/form-data">
      @csrf

      <h4 class="sub-title">Datos Personales</h4>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="my-input">Nombre del festejado <label class="text-danger">*</label></label>
          <input name="nombreNiño" class="form-control" type="text">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Fecha de cumpleaños <label class="text-danger">*</label></label>
          <input name="fechaNacNiño" class="form-control" type="date">
        </div>

        <div class="col-sm-3">
          <label for="my-input">Edad <label class="text-danger">*</label></label>
          <input name="edadNiño" class="form-control" type="number">
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
          <input name="telefonoCelular" class="form-control" type="text">
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
          <select name="partyStatus" class="form-control">
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
          <select name="paquete" class="form-control" id="paquete">
              <option selected disable>Seleccione el paquete</option>
              @foreach ($paquetes as $paquete)
                  <option value="{{$paquete->id}}">{{$paquete->descripcionPaquete}}</option>
              @endforeach
          </select>
        </div>

        <div class="col-sm-3">
          <label for="my-input">Días <label class="text-danger">*</label></label>
          <select name="idPeriodo" class="form-control" id="dias">
              <option value="0" disable="true" selected="true">Seleccione los dias</option>
          </select>
        </div>

        <div class="col-sm-3">
          <label for="my-input">Comida Niño <label class="text-danger">*</label></label>
          <select name="comidaNino[]" class="js-example-basic-multiple" multiple="multiple" id="comidaNino">
            <option selected disable>Seleccione la comida</option>
          </select>
          <!--<input type="text" name="cantidadNino" class="form-control" placeholder="Cantidad" id="">-->
        </div>

        <div class="col-sm-3">
          <label for="my-input">Comida Adulto <label class="text-danger">*</label></label>
          <select name="comidaAdulto[]" class="js-example-basic-multiple" multiple="multiple" id="comidaAdulto">
            <option selected disable>Seleccione la comida</option>
          </select>
          <!--<input type="text" name="cantidadAdulto" class="form-control" placeholder="Cantidad" id="">-->
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
      <button data-toggle="modal" data-target="#liquidacion" class="col-sm-12 btn btn-primary">Liquidar</button>
    </div>

  </div>
</div>

  <!-- modal para abonar -->
  @include('modules.modals.modal_Liquidar_Anticipo')



  @section('javascripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
  </script>
  <script src="{{asset('js/fiestasScript.js')}}"></script>

  @endsection 
@endsection