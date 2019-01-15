<!-- Listado de los empleados -->
<!-- Implementar busqueda de empleados (Por nombre) y paginacion (Si se puede) -->
@extends('layouts.template')
@section('title', '- Empleados')

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont-tie bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Empleados</h4>
                        <span>Listado de los empleados que actualmente trabajan en la empresa.</span><br><br>
                        <form action="POST">
                            <div class="input-group input-group-button input-group-primary">
                                <input type="text" class="form-control" placeholder="Buscar empleado...">
                                <button type="submit " class="btn btn-primary input-group-addon" id="basic-addon1">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="card">
    <!-- foreach de los empleados/users -->

    <div class="col-md-12 col-xl-12 mt-3 mb-3">
        <div class="card">
            <div class="card-block user-detail-card">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('admin/assets/images/widget/Group-user.jpg')}} " alt="" class="img-fluid p-b-10">
                        <div class="contact-icon ml-5">
                            <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Editar" ><i class="icofont icofont-ui-edit m-0"></i></button>
                            <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Eliminar" ><i class="icofont icofont-garbage m-0"></i></button>
                        </div>
                        
                    </div>
                    <div class="col-sm-8 user-detail">
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nombre :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">Gregory Durk</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">24 October 2017</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30"><a href="mailto:dummy@gmail.com">techdemo@gmail.com</a></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">23/Encrypt square, Melbourn, Australia</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">+(345)234-5287</h6>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">Puesto 1</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-block user-detail-card">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('admin/assets/images/widget/Group-user.jpg')}} " alt="" class="img-fluid p-b-10">
                        <div class="contact-icon ml-5">
                            <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Editar" ><i class="icofont icofont-ui-edit m-0"></i></button>
                            <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Eliminar" ><i class="icofont icofont-garbage m-0"></i></button>
                        </div>
                        
                    </div>
                    <div class="col-sm-8 user-detail">
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nombre :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">Gregory Durk</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">24 October 2017</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30"><a href="mailto:dummy@gmail.com">techdemo@gmail.com</a></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">23/Encrypt square, Melbourn, Australia</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">+(345)234-5287</h6>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">Puesto 1</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    

</div>
    

@endsection