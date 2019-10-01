@extends('layouts.template')
@section('title', '- Punto de venta cocina')


@section('content')

    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger background-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                {{ $error  }}
            </div>
        @endforeach
    @endif

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
                        <h4>Güercos - Cocina</h4>
                        <span>PUNTO DE VENTA</span>
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
                <div class="card">
                    <div class="card-block">
                      <div class="row">
                        <div class="col-10"><h3>Generación de Venta</h3></div>
                        <div class="col-2"><b>TIKET: </b></div>
                      </div>
                      <div class="row">
                        <div class="col-8" style="background-color:#D3D3D3;">
                          <br>
                          <div class="row">
                            <div class="col-3">
                              <div class="card">
                                Producto 1
                              </div> 
                            </div>
                            <div class="col-3">
                              <div class="card">
                                Producto 2
                              </div> 
                            </div>
                            <div class="col-3">
                              <div class="card">
                                Producto 3
                              </div> 
                            </div>
                            <div class="col-3">
                              <div class="card">
                                Producto 4
                              </div> 
                            </div>
                            
                          </div>
                        </div>
                        <div class="col-4">
                          Lista de Ventas
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('javascripts')
        <script>
            $(document).ready(function(){
                $('#bt_add').click(function(){
                    agregar();
                })
                mostrarValores();
            });
            
            //variables
            var cont =0;
            total = 0;
            subtotal=[];
            $('#guardar').hide();
            
            //cada vez que se cambie el articulo se ejecuta
            $('#pid_articulo').change(mostrarValores);
            
            function mostrarValores(){
                datosArticulo = document.getElementById('pid_articulo').value.split('_');
                $('#pprecio_venta').val(datosArticulo[2]);
                $('#pstock').val(datosArticulo[1]);
            }
            
            function agregar(){
                
                datosArticulo = document.getElementById('pid_articulo').value.split('_');
                
                id_articulo = datosArticulo[0];
                articulo = $('#pid_articulo option:selected').text();
                cantidad = $('#pcantidad').val();
                precio_venta = $('#pprecio_venta').val();
                descuento = $('#pdescuento').val();
                stock = $('#pstock').val();
                
                
                if(id_articulo != "" && cantidad != "" && cantidad > 0 && precio_venta != "" && descuento != "" )
                {
                    
                    if(stock >= cantidad)
                    {
                        subtotal[cont] = (cantidad * precio_venta - descuento);
                        total = total + subtotal[cont];
                        
                        var fila = '<tr class="selected" id="fila'
                        +cont+'"><td><button class"btn btn-danger" type"button" onclick="eliminar('
                        +cont+');">X</button></td><td><input type="hidden" name="id_articulo[]" value="'
                        +id_articulo+'">'
                        +articulo+'</td><td><input type="number" name="cantidad[]" value="'
                        +cantidad+'"></td><td><input type="number" name="precio_venta[]" value="'
                        +precio_venta+'" readonly></td><td><input type="number" name="descuento[]" value="'
                        +descuento+'"></td><td>'
                        +subtotal[cont]+'</td></tr>';
                        
                        //aumentar el contador
                        cont++;
                        
                        //limpiar los controles
                        limpiar();
                                            
                        //indicar el subtotal
                        $('#total').html('s/. '+total);
                        $('#total_venta').val(total);
                        //mostrar los botones de guardar y cancelar
                        evaluar();
                        
                        //agregar la fila a la tabla
                        $('#detalles').append(fila);
                            
                        cantidad=0;
                        stock=0;
                        precio_venta=0;
                    }
                    else
                    {
                        alert('La cantidad a vender supera el stock de: ' + stock );
                    }
                }
                else
                {
                    alert('Error al ingresar la venta, revise los datos del articulo');    
                }
                
            }
            
            
            function limpiar(){
                $('#pcantidad').val('');
                $('#pprecio_venta').val('');
                $('#pdescuento').val('');
            }
            
            function evaluar(){
                if (total > 0)
                {
                    $('#guardar').show();
                }
                else
                {
                    $('#guardar').hide();
                }
            }
            
            function eliminar(index){
                total = total- subtotal[index];
                $('#total').html('s/. '+total);
                $('#total_venta').val(total);
                $('#fila' + index).remove();
                evaluar();
            }
        </script>
    @endsection

@endsection