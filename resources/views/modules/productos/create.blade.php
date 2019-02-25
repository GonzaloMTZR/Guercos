@extends('layouts.template')
@section('title', '- Productos')

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-plus bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Añadir un producto al inventario</h4>
                        <span>Agregar un nuevo producto.</span>
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
        <div class="card-header">
            <h5>Formulario</h5>
            <span>Complete los campos para agregar un nuevo producto (la imagen puede ser opcional).</span>
            <div class="card-header-right"><i
                    class="icofont icofont-spinner-alt-5"></i></div>
    
            <div class="card-header-right">
                <i class="icofont icofont-spinner-alt-5"></i>
            </div>
        </div>

        <div class="card-block">
            <form action="/productos" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Nombre del producto</label>
                        <input name="descripcion" id="my-input" class="form-control" type="text">
                    </div>
                    

                    <div class="col-sm-6">
                        <label for="my-input">Código del producto</label>
                        <input name="codigo" id="my-input" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="my-input">Precio</label>
                        <input name="precio" id="my-input" class="form-control" type="text">
                        
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="my-input">Cantidad</label>
                        <input name="cantidad" id="my-input" class="form-control" type="number">
                    </div>
                    

                    <div class="col-sm-6">
                        <label for="my-input">Area</label>
                        <select class="form-control" name="area" id="">
                            <option selected disabled>Seleccione el área</option>
                            <option value="Cocina">Cocina</option>
                            <option value="Entrada">Entrada</option>
                            <option value="Piso">Piso</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="my-input">Es infinito</label>
                            <select class="form-control" name="infinito" id="">
                                <option selected disabled>Seleccione la opcion deseada</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    

                    <div class="col-sm-6">
                        <label for="my-input">Tipo de unidad</label>
                        <select class="form-control" name="tipoUnidad" id="">
                            <option selected disabled>Seleccione la unidad del producto</option>
                            <option value="Kgs">Kgs.</option>
                            <option value="Lts">Lts.</option>
                            <option value="Pzas">Pzas.</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Categoria</label>
                        <select class="form-control" name="categoria" id="">
                            <option selected disabled>Seleccione la categoria del producto</option>
                            <option value="Producto">Producto</option>
                            <option value="Insumo">Insumo</option>
                        </select>
                    </div>
                

                    <div class="col-sm-6">
                        <label for="my-input">Seleccione una imagen para el producto</label>
                        <input type="file" class="form-control" name="imagenProducto" id="">
                    </div>
                </div>
            
                <div class="form-group">
                    <button type="submit" class="col-sm-12 btn btn-success">Agregar</button>
                </div>
            </form>
        </div>

    </div>
    





@endsection