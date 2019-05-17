@extends('layouts.template') 
@section('title', '- Fiestas') 

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
        <i class="icofont icofont-heart bg-c-lite-green"></i>
        <div class="d-inline">
          <h4>Detalles de fiesta</h4>
          <span>Se muestran los detalles de la fiesta de {{$fiesta->nombreNiño}}.</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">

  <div class="card-block">
    <h4 class="sub-title">Información de la fiesta</h4>

    <div class="card">
      <div class="card-block table-border-style">


        <div class="row">
          <div class="col-lg-12 col-xl-6">
            <div class="table-responsive">
              <table class="table m-0">
                <tbody>
                  <tr>
                    <th scope="row">Nombre del padre</th>
                    <td>{{$fiesta->nombrePapa}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Telefono</th>
                    <td>{{$fiesta->telefonoCelular}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Telefono de casa</th>
                    <td>{{$fiesta->telefonoCasa}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Correo electrónico</th>
                    <td>{{$fiesta->correo}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Direccion</th>
                    <td>{{$fiesta->calle}}, Colonia {{$fiesta->colonia}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Nombre del niño</th>
                    <td><a href="#!">{{$fiesta->nombreNiño}}</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Edad del niño</th>
                    <td>{{$fiesta->edadNiño}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Fecha de cumpleaños</th>
                    <td>{{\Carbon\Carbon::parse($fiesta->fechaNacNiño)->format('d/m/Y')}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Fecha de la fiesta</th>
                    <td>{{\Carbon\Carbon::parse($fiesta->fechaFiesta)->format('d/m/Y')}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Estatus de la fiesta</th>
                    <td><a href="#!">{{$fiesta->partyStatus}}</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Liquidacion</th>
                    <td><a href="#!">${{$fiesta->liquidacion}}</a></td>
                  </tr>
   
                </tbody>
              </table>
            </div>
          </div>
          <!-- end of table col-lg-6 -->
          <div class="col-lg-12 col-xl-6">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  
                  <tr>
                    <th scope="row">Paquete de fiesta</th>
                    <td>Nombre del paquete</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Comida para niño</th>
                    <td>comida que se eligío</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Comida para adulto</th>
                    <td>comida que se eligío</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Pastel</th>
                    <td>{{$fiesta->pastel}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Salón</th>
                    <td>{{$fiesta->salon}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Personaje de la piñata</th>
                    <td>{{$fiesta->piñata}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Manteles de mesa</th>
                    <td>{{$fiesta->manteles}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Horario de fiesta</th>
                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$fiesta->horaInicio)->format('h:i A')}} -
                        {{\Carbon\Carbon::createFromFormat('H:i:s',$fiesta->horaFinal)->format('h:i A')}}
                    </td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Hora para servir la comida</th>
                    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$fiesta->horaComida)->format('h:i A')}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Notas especiales</th>
                    <td>{{$fiesta->notas}}</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Total</th>
                    <td>{{$fiesta->total}} se verá el total del paquete</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- end of table col-lg-6 -->
        </div>
      </div>
    </div>
    
    
    
  </div>

  
  <div class="card-block">
    <h4 class="sub-title">Pagos</h4>

    <div class="card">
      <div class="card-header">
        <h5>Historial de abonos</h5>
            <div class="float-right">
              <button class="btn btn-primary" data-toggle="modal" data-target="#abonos">Agregar abono</button> 
              <button class="btn btn-success" data-toggle="modal" data-target="#liquidacion">Liquidar total</button>
              <a href="/fiestas/{{$fiesta->id}}/edit" class="btn btn-warning">Editar fiesta</a>
            </div>
      </div>
      
      <div class="card-block table-border-style">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="table-responsive">
              <table class="table m-0">
                <tbody>
                  <tr>
                    <th scope="row">Costo del Paquete</th>
                    <td>$15000</td>
                  </tr>
                  @foreach ($fiesta->abonos as $abono)
                  <tr>
                    <th scope="row">Abono {{$abono->pivot->created_at->format('d/m/Y')}}</th>
                    <td>${{$abono->cantidadAbono}}.00</td>
                  </tr>
                  @endforeach
                  <tr>
                    <th scope="row">Usted Debe Hoy</th>
                    <td>${{$fiesta->liquidacion}}.00</td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


                                                                <!-- Modal -->
  <div class="modal fade modal-flex" id="abonos" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tab-efectivo" role="tab">Pago en efectivo</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab-tarjeta" role="tab">Pago con tarjeta</a>
                      </li>
                  </ul>
                  <div class="tab-content modal-body">
                      <div class="tab-pane active" id="tab-efectivo" role="tabpanel">
                        
                          <form method="POST" action="/fiestas/{{$fiesta->id}}/addAbonoEfectivo">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="">Monto del Abono</label>
                                    <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                                </div>
                            </div>
                            
                            <input type="hidden" name="tipoPago" value="Pago en efectivo">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
                            </div>                    
                        </form>
                      </div>
                    
                      <div class="tab-pane" id="tab-tarjeta" role="tabpanel">
                          <form method="POST" action="/fiestas/{{$fiesta->id}}/addAbonoTarjeta">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="my-input">Monto del Abono</label>
                                    <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                                </div>

                                <div class="form-group">
                                    <label for="my-input">Número de Autorización</label>
                                    <input id="my-input" name="pinConfirmacion" class="form-control" type="text">
                                </div>
                              
                                <input type="hidden" name="tipoPago" value="Pago con tarjeta">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
                            </div>                    
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="liquidacion" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5>Usted liquida con: ${{$fiesta->liquidacion}}.00</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            
              <form method="POST" action="/fiestas/{{$fiesta->id}}/liquidarFiesta">
                  @csrf

                  <div class="modal-body">
                      <div class="form-group">
                        <label for="">Monto de liquidacion</label>
                          <input id="my-input" name="liquidacion" class="form-control" type="text">
                      </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary waves-effect waves-light ">Liquidar fiesta</button>
                  </div>                    
              </form>

          </div>
      </div>
  </div>






@endsection