@extends('layouts.template')
@section('title', '- Paquetes de fiesta')
@section('css')
    
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Editar paquete de fiesta: nombre del paquete</h4>
                        <span>Modifique los campos que sean necesarios, si no se hace ninguna modificación no se actualizará.</span>
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
                                <div class="form-group">
                                    <label for="my-input">Text</label>
                                    <input id="my-input" class="form-control" type="text">
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
        
@endsection