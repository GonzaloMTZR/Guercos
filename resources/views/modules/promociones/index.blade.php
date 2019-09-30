@extends('layouts.template') 
@section('title', '- Promociones')
@section('css')
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

@if(session()->has('error-message'))
    <div class="alert alert-warning background-warning">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled text-white"></i>
        </button>
        {{ session()->get('error-message') }}
    </div>
@endif

<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
        <div class="d-inline">
          <h4>Promociones activas</h4>
          <span>Listado de las promociones.</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Product list card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Lista de promociones</h5>
                    <span>Haga click en el signo de mas para ver las acciones.</span>
                    <a class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" href="/promociones/create"> 
                        <i class="icofont icofont-plus m-r-5"></i> Agregar promocion</a>
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <table id="promociones" class="table table-striped dt-responsive nowrap" style="width:100%"> <!--class="table table-striped dt-responsive nowrap"-->
                                    
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Termino</th>
                                            <th>Disponiblidad</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <!-- Foreach para imprimir los datos de la base de datos -->
                                    <tbody>
                                        @foreach($promociones as $promocion)
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="/imagenes/promociones/{{$promocion->imagen}}" width="100px" class="img-fluid" alt="Imagen de la promoción">
                                                    </td>
                                                    <td>{{$promocion->nombre}}</td>
                                                    <td>{{$promocion->fechaInicio}}</td>
                                                    <td>{{$promocion->fechaTermino}}</td>
                                                    <td>{{$promocion->dias}}</td>
                                                    <td>
                                                        <a href="/promociones/{{$promocion->id}}/edit" class="btn btn-warning">Editar</a>
                                                        <form method="POST" action="/promociones/{{$promocion->id}}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            
                                                        </form>
                                                        
                                                    </td>
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
@section('javascripts')
    <script>
        $(document).ready(function() {
            $('#promociones').DataTable({
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