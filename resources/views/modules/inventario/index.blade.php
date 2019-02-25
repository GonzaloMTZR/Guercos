@extends('layouts.template')
@section('title', '- Inventario')

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont-listine-dots bg-c-lite-green"></i>
                <div class="d-inline">
                    <h4>Inventario</h4>
                    <span>Listado de los productos y todos los bienes materiales</span>
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
                    <h5>Lista de productos</h5>
                    <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" href="#"> 
                        <i class="icofont icofont-plus m-r-5"></i> Agregar producto</button>
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                    
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre del producto</th>
                                            <th>Costo</th>
                                            <th>Stock</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <!-- Foreach para imprimir los datos de la base de datos -->

                                    <tbody>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="{{asset('admin/assets/images/product-list/pro-l1.png')}}" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6>Nombre</h6>
                                                <span>Breve descripcion</span>
                                            </td>
                                            <td>$Costo</td>
                                            <td>
                                                <label class="text-danger">Stock actual</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
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
@endsection