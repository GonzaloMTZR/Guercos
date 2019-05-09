@extends('layouts.template')
@section('title', '- Empleados')
@section('css')
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont-tie bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Empleados</h4>
                        <span>Listado de los empleados que actualmente trabajan en la empresa.</span><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{url('/register')}}">Crear empleado</a>
        </div>
        <div class="card-block">
            <div class="table-responsive dt-responsive">
                <table id="empleados" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <!--<th>Fecha Nacimiento</th>-->
                            <th>Email</th>
                            <!--<th>Dirección</th>-->
                            <!--<th>Numero Telefonico</th>-->
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado) 
                            <tr>
                                <td>{{$empleado->name}}</td>
                                <!--<td>{ {date('d-m-Y', strtotime($empleado->fechaNacimiento))}}</td>-->
                                <td>{{$empleado->email}}</td>
                                <td>{{$empleado->roles()->value('name')}}</td>
                                <!--<td>{ {$empleado->numeroTelefonico}}</td>-->
                                <!--<td>Rol dentro de la empresa</td>-->
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <!--<th>Fecha Nacimiento</th>-->
                            <th>Email</th>
                            <!--<th>Dirección</th>-->
                            <!--<th>Numero Telefonico</th>-->
                            <th>Rol</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script>
        $(document).ready( function () {
            $('#empleados').DataTable({
                "language": {
                    "decimal":        "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ empleados por página",
                    "zeroRecords":    "No se encuentran coincidencias",
                    "info":           "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty":      "No hay datos en la tabla",
                    "emptyTable":     "No hay datos en la tabla",
                    "infoFiltered":   "(filtrado para _MAX_ datos en la tabla)",
                    "loadingRecords": "Cargando datos...",
                    "processing":     "Procesando...",
                    "search":         "Buscar:",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                }
            });
        });
    </script>
    <!--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->

    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
@endsection


                                            <!-- Empleados mostrados en tarjetas -->

<!--@ foreach ($empleados as $empleado)  
        <div class="card">
            <div class="card-block user-detail-card">
                <div class="row">

                    <div class="col-sm-4">
                        <img src="{ {asset('admin/assets/images/widget/Group-user.jpg')}} " alt="" class="img-fluid p-b-10">
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
                                <h6 class="m-b-30">{ {$empleado->nombre}}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">{ {date('d-m-Y', strtotime($empleado->fechaNacimiento))}}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">{ {$empleado->email}}</a></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">{ {$empleado->direccion}}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">{ {$empleado->numeroTelefonico}}</h6>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">{ {$empleado->idPuesto}} -- CAMBIAR ID POR EL NOMBRE DEL PUESTO</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @ endforeach-->