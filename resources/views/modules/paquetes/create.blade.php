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
                        <h4>Crear nuevo paquete de fiesta</h4>
                        <span>Llene los campos para crear un nuevo paquete de fiesta.</span>
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
                                @csrf
                                <!--<h4 class="sub-title">Datos Personales</h4>-->
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label for="my-input">Nombre del paquete</label>
                                        <input name="descripcionPaquete" class="form-control" type="text">
                                    </div>

                                    <div class="col-sm-2">
                                        <label for="my-input">Precio</label>
                                        <input name="precio" class="form-control" type="text">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="my-input">Cantidad de personas</label>
                                        <input name="cantidad" class="form-control" type="text">
                                    </div>    
                                  
                                    <div class="col-sm-3">
                                        <label for="my-input">Periodo</label>
                                        <select name="periodo" id="" class="form-control">
                                          <option selected disabled>Seleccione el periodo</option>
                                          <option value="Lunes - Viernes">Lunes a Viernes</option>
                                          <option value="Sábado - Domingo">Sábado a Domingo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="my-input">Seleccione la comida de niño</label>
                                        <select class="js-example-basic-multiple" name="comidaNino[]" multiple="multiple">
                                            @foreach($productos as $producto)
                                              <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="my-input">Seleccione la comida de adulto</label>
                                        <select class="js-example-basic-multiple" name="comidaAdulto[]" multiple="multiple">
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

        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
        <!--<script type="text/javascript" src="{ {asset('admin/bower_components/select2/js/select2.full.min.js')}}"></script>
        <script type="text/javascript" src="{ {asset('admin/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
        <script type="text/javascript" src="{ {asset('admin/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{ {asset('admin/assets/js/jquery.quicksearch.js')}}"></script>-->
    @endsection
       
        
@endsection