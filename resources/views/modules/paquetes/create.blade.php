@extends('layouts.template')
@section('title', '- Paquetes de fiesta')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/multiselect/css/multi-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/css/select2.min.css')}}"/>
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
                                        <label for="my-input">Nombre del paquete <label class="text-danger">*</label></label>
                                        <input name="descripcionPaquete" class="form-control" type="text">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="my-input">Cantidad de personas <label class="text-danger">*</label></label>
                                        <input name="cantidadPersonas" class="form-control" type="text">
                                    </div>    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="my-input">Comida de niño <label class="text-danger">*</label></label>
                                        <select class="js-example-basic-multiple" name="comidaNiño[]" multiple="multiple">
                                            <option selected disabled>Seleccione la comida de niño</option>
                                            <option value="">Producto 1</option>
                                            <option value="">Producto 2</option>
                                            <option value="">Producto 3</option>
                                            <option value="">Producto 4</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="my-input">Comida de adulto <label class="text-danger">*</label></label>
                                        <select class="js-example-basic-hide-search" name="comidaAdulto[]" multiple="multiple">
                                            <option selected disabled>Seleccione la comida de adulto</option>
                                            <option value="">Producto 1</option>
                                            <option value="">Producto 2</option>
                                            <option value="">Producto 3</option>
                                            <option value="">Producto 4</option>
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
        <script type="text/javascript" src="{{asset('admin/bower_components/select2/js/select2.full.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"><script>
        <script type="text/javascript" src="{{asset('admin/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/js/jquery.quicksearch.js')}}"></script>
    @endsection
       
        
@endsection