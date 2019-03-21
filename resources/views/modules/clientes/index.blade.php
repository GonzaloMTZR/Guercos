@extends('layouts.template')
@section('title', '- Clientes')
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
                    <i class="icofont icofont-royal bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Clientes</h4>
                        <span>Clientes que actualmente se encuentran en el sistema.</span>
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

    <!-- Page body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Product list card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Listado de clientes que actualmente se encuentran en el sistema</h5>
                    <span>Haga click en el signo de mas para ver las acciones.</span>
                    <a class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" href="/clientes/create"> 
                        <i class="icofont icofont-plus m-r-5"></i> Agregar cliente</a>
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <table id="clientes" class="table table-striped dt-responsive nowrap" style="width:100%"> <!--class="table table-striped dt-responsive nowrap"-->
                                    
                                    <thead>
                                        <tr>
                                            <th>Nombre del cliente</th>
                                            <th>Nombre del niño</th>
                                            <th>Cumpleaños del niño</th>
                                            <th>Ciudad</th>
                                            <th>Direccion</th>
                                            <th>Teléfono de casa</th>
                                            <th>Teléfono celular</th>
                                            <th>Correo Electronico</th>
                                            
                                            
                                        </tr>
                                    </thead>

                                    <!-- Foreach para imprimir los datos de la base de datos -->
                                    <tbody>
                                        @foreach ($clientes as $cliente)
                                            <tr>
                                                <td>{{$cliente->nombre}}</td>
                                                <td>{{$cliente->nombreNiño}}</td>
                                                <td>{{\Carbon\Carbon::parse($cliente->fechaNacNiño)->format('d/m/Y')}}</td>
                                                <td>{{$cliente->ciudad}}</td>
                                                <td>{{$cliente->calle}}</td>
                                                <td>{{$cliente->telefonoCasa}}</td>
                                                <td>{{$cliente->telefonoCelular}}</td>
                                                <td>{{$cliente->correo}}</td>
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweet::alert')
@section('javascripts')
    <script>
        $(document).ready(function() {
            $('#clientes').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se econtraron coincidencias",
                    "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                    } /* Aqui acaba la paginación */
                } /* Aqui acaba el Languaje */
            });
        });
    </script>
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->
@endsection


@endsection