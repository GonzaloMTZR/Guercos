@extends('layouts.template')
@section('title', '- Ventas')
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
                    <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Ventas</h4>
                        <span>Ventas realizadas(PRUEBAS).</span>
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
                        <h5>Filtro de busqueda para las ventas</h5>
                        <span>Seleccione las fechas deseadas para aplicar el filtro de búsqueda.</span>
                    </div>

                    <div class="card-block">
                        <form action="">
                            <div class="form-gropu row">
                                <div class="col-sm-4">
                                    <label for="">Desde:</label>
                                    <input type="date" class="form-control" name="" id="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="">Hasta:</label>
                                    <input type="date" class="form-control" name="" id="">
                                </div>
                                
                                <div class="col-sm-4">
                                    <label for=""><br></label>
                                    <button type="submit" class="col-sm-12 btn btn-primary">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-block">
                        <div class="table-responsive">
                            <div class="table-content">
                                <div class="project-table">
                                    <table id="productos" class="table table-striped dt-responsive nowrap" style="width:100%"> <!--class="table table-striped dt-responsive nowrap"-->
                                        
                                        <thead>
                                            <tr>
                                                <th>id de venta</th>
                                                <th>Productos vendidos</th>
                                                <th>Cantidad</th>
                                                <th>Descuento</th>
                                                <th>Area</th>
                                                <th>Usuario</th>
                                                <th>Total</th>
                                                <th>Fecha</th>
                                                <th>Folio</th>
                                                <th>Serie</th>
                                                <th>Tipo</th>
                                                
                                            </tr>
                                        </thead>
                                            <!-- Foreach para imprimir los datos de la base de datos -->
                                            @foreach ($ventas as $venta)
                                                <tr>
                                                    <td>{{$venta->id}}</td>
                                                    <td>
                                                        <ul>
                                                            
                                                            <li>{{$venta->productos()->pluck('descripcion')}}</li>
                                                            <li>{{$venta->productos()->value('descripcion')}}</li>
                                                            
                                                            
                                                                                                                    
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>{{$venta->productos()->pluck('cantidad')}}</li>
                                                            <li>{{$venta->productos()->value('cantidad')}}</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>{{$venta->productos()->pluck('descuento')}}</li>
                                                            <li>{{$venta->productos()->value('descuento')}}</li>
                                                        </ul>
                                                    </td>
                                                    <td>{{$venta->productos()->value('area')}}</td>
                                                    <td>{{$venta->user()->value('name')}}</td>
                                                    <td>$ {{$venta->totalVenta}}.00</td>
                                                    <td>{{$venta->created_at->format('d/m/Y')}}</td>
                                                    <td>{{$venta->folio}}</td>
                                                    <td>{{$venta->serieComprobante}}</td>
                                                    <td>{{$venta->tipoComprobante}}</td>                                                    
                                                </tr>
                                            @endforeach
                                        <tbody>
                                            
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