@extends('layouts.template') 
@section('title', '- Paquetes de fiesta') 
@section('css')
    <!--<link rel="stylesheet" type="text/css" href="{ {asset('admin/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{ {asset('admin/bower_components/multiselect/css/multi-select.css')}}"/>
    <link rel="stylesheet" href="{ {asset('admin/bower_components/select2/css/select2.min.css')}}"/>-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
        <div class="d-inline">
          <h4>Editar paquete de fiesta: {{$paquete->descripcionPaquete}}</h4>
          <span>Modifique los campos que sean necesarios, si no se hace ninguna modificación no se actualizará.</span>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="page-body">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Formulario de creacion: </h5>
          <div class="card-header-right">
            <i class="icofont icofont-spinner-alt-5"></i>
          </div>
        </div>
        <div class="row card-block">
          <div class="col-md-12">
            <form action="/paquetes" method="post">
              <!--<h4 class="sub-title">Datos Personales</h4>-->
              <div class="form-group row">
                <div class="col-sm-6">
                  <label for="my-input">Nombre del paquete</label>
                  <input value="{{$paquete->descripcionPaquete}}" name="descripcionPaquete" class="form-control" type="text">
                </div>

                <div class="col-sm-3">
                  <label for="my-input">Cantidad de personas</label>
                  <select class="js-example-basic-multiple" name="cantidad[]" multiple="multiple">
                      <option selected disabled>Seleccione la comida de adulto</option>
                      @foreach($cantidadPersonas as $cantidad)
                        <option value="{{$cantidad->id}}">{{$cantidad->cantidad}} - $@convert($cantidad->precio)</option>
                      @endforeach
                  </select>
                </div>

                <div class="col-sm-3">
                  <label for="my-input">Periodo</label>
                  <select name="" id="" class="form-control">
                    <option selected disabled>Seleccione el periodo</option>
                    <option value="Lunes - Viernes">Lunes a Viernes</option>
                    <option value="Sábado - Domingo">Sábado a Domingo</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-6">
                  <label for="my-input">Comida de niño</label>
                  <select class="js-example-basic-multiple" name="comidaNiño[]" multiple="multiple">
                      <option selected disabled>Seleccione la comida de niño</option>
                      @foreach($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                      @endforeach
                  </select>
                </div>

                <div class="col-sm-6">
                  <label for="my-input">Comida de adulto</label>
                  <select class="js-example-basic-multiple" name="comidaAdulto[]" multiple="multiple">
                      <option selected disabled>Seleccione la comida de adulto</option>
                      @foreach($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                      @endforeach
                  </select>
                </div>
              </div>

              <hr>

              <div class="form-group row">
                <button type="submit" class="col-12 btn btn-success">Agregar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('javascripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
  });
</script>


<!--<script type="text/javascript" src="{ {asset('admin/bower_components/select2/js/select2.full.min.js')}}"></script>
        <script type="text/javascript" src="{ {asset('admin/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
        <script type="text/javascript" src="{ {asset('admin/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{ {asset('admin/assets/js/jquery.quicksearch.js')}}"></script>-->
@endsection @endsection