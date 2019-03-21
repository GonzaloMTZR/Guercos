@extends('layouts.template')
@section('title', '- Agregar cliente')
@section('css')
    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/css/select2.min.css')}}"/>
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-plus bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Agregar cliente a la base de datos</h4>
                        <span>Formulario para agregar a un cliente.</span>
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
            <form action="/clientes" method="post" enctype="multipart/form-data">
                @csrf

                <h4 class="sub-title">Datos Personales</h4>
                <div class="form-group row">

                    <div class="col-sm-6">
                        <label for="my-input">Nombre del padre (Cliente)</label>
                        <input name="nombrePapa" class="form-control" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Nombre del festejado</label>
                        <input name="nombreNino" class="form-control" type="text">
                    </div>

                       
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="my-input">Fecha de cumpleaños</label>
                        <input name="fechaCumpleanos" class="form-control" type="date">
                    </div> 
                    
                    <div class="col-sm-3">
                        <label for="my-input">Número telefónico de casa</label>
                        <input name="telefonoCasa" class="form-control" type="text">
                    </div>    
               
                    <div class="col-sm-3">
                        <label for="my-input">Número celular</label>
                        <input name="telefonoCel" class="form-control" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Correo electrónico</label>
                        <input name="correo" class="form-control" type="text">
                    </div>    
                </div>

                <div class="form-group row">

                    <div class="col-sm-4">
                        <label for="my-input">Municipio</label>
                        <input name="ciudad" class="form-control" type="text">
                    </div>

                    <div class="col-sm-4">
                        <label for="my-input">Colonia</label>
                        <input name="colonia" class="form-control" type="text">
                    </div>

                    <div class="col-sm-4">
                        <label for="my-input">Calle y número</label>
                        <input name="calle" class="form-control" type="text">
                    </div>    
                </div>

                <div class="form-group">
                    <button type="submit" class="col-sm-12 btn btn-success">Agregar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript" src="{{asset('admin/bower_components/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-sigle').select2();
        });
    </script>
@endsection