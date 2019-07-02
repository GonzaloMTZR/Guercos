@extends('layouts.template')
@section('title', '- Paquete de fiesta')
@section('css')
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">-->
    <!--<link rel="stylesheet" type="text/css" href="{ {asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{ {asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">-->
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Paquete de fiesta {{$paquete->descripcionPaquete}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="row card-block">
                    <div class="col-md-12 table-responsive">
                        <table id="paquete" class="table table-striped table-hover nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Periodo</th>
                                    <th>Cantidad de personas</th>
                                    <th>Comida</th>
                                    <th>Precio</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach($paquete->cantidadPersonas as $cantidad)
                                <tr>
                                    <td>{{$cantidad->periodo}}</td>
                                    <td>{{$cantidad->cantidad}}</td>
                                    <td>
                                      @foreach($paquete->producto as $comida)
                                      <ul>
                                        <li>{{$comida->descripcion}}</li>
                                      </ul>
                                      @endforeach
                                    </td>
                                    <td>$@convert($cantidad->precio)</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('javascripts')
       <!-- <script>
            $(document).ready(function() {
                $('#paquete').DataTable({
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
        <script src="{ {asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{ {asset('admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{ {asset('admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

        <script src="{ {asset('admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{ {asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>-->
        <!--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->
    @endsection
    

    
@endsection