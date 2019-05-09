@extends('layouts.template')
@section('title', '- Fiestas')
@section('css')
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')

    @if(session()->has('success-message'))
        <div class="alert alert-success background-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled text-white"></i>
            </button>
            {{ session()->get('success-message') }}
        </div>
    @endif
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-royal bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Fiestas</h4>
                        <span>Fiestas agendadas.</span>
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
                    <h5>Lista de fiestas</h5>
                    <span>Haga click en el signo de mas para ver las acciones.</span>
                    <a class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" href="/fiestas/create"> 
                        <i class="icofont icofont-plus m-r-5"></i> Agendar fiesta</a>
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <table id="productos" class="table table-striped dt-responsive nowrap" style="width:100%"> <!--class="table table-striped dt-responsive nowrap"-->
                                    
                                    <thead>
                                        <tr>
                                            <th>Nombre del niño</th>
                                            <th>Nombre del padre</th>
                                            <th>Cumpleaños</th>
                                            <th>Fecha de reservacion</th>
                                            <th>Pastel</th>
                                            <th>Piñata</th>
                                            <th>Instrucciones especiales</th>
                                            <th>Hora de inicio</th>
                                            <th>Hora de termino</th>
                                            <th>Hora de la comida</th>
                                            <th>Paquete</th>
                                            <th>Comida de niño</th>
                                            <th>Comida de adulto</th>
                                        </tr>
                                    </thead>

                                    <!-- Foreach para imprimir los datos de la base de datos -->
                                    <tbody>
                                        @foreach ($fiestas as $fiesta)
                                                <tr>
                                                    <td>{{$fiesta->nombreNiño}}</td>
                                                    <td>{{$fiesta->nombrePapa}}</td>
                                                    <td>{{\Carbon\Carbon::parse($fiesta->fechaNacNiño)->format('d/m/Y')}}</td>
                                                    <td>{{\Carbon\Carbon::parse($fiesta->fechaFiesta)->format('d/m/Y')}}</td>
                                                    <td>{{$fiesta->pastel}}</td>
                                                    <td>{{$fiesta->piñata}}</td>
                                                    <td>{{$fiesta->notas}}</td>
                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$fiesta->horaInicio)->format('h:i A')}}</td>
                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$fiesta->horaFinal)->format('h:i A')}}</td>
                                                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$fiesta->horaComida)->format('h:i A')}}</td>
                                                    <td>{{$fiesta->idPaquete}}</td>
                                                    <td>{{$fiesta->comidaNiños}}</td>
                                                    <td>{{$fiesta->comidaAdulto}}</td>
                                                    
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
            $('#productos').DataTable({
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