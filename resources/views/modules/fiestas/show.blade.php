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
                      <td>{{$fiesta->calle}}. <br> 
                        Colonia: {{$fiesta->colonia}}
                      </td>
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

                    <tr>
                      <th scope="row">Paquete de fiesta</th>
                      @foreach ($fiesta->paquetes as $item)
                        <td>{{$item->descripcionPaquete}} </td>
                      @endforeach
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
                    
                    

                    <!--
                      Comida del paquete y no la que se eligió
                    -->
                    <tr>
                      <th scope="row">Comida para niño</th>
                      @foreach ($fiesta->paquetes as $item) 
                      <td>
                        {{$item->pivot->comidaNino}}
                      </td>
                      @endforeach
                    </tr>

                    <!--
                      Comida del paquete y no la que se eligió
                    -->
                    <tr>
                      <th scope="row">Comida para adulto</th>
                      @foreach ($fiesta->paquetes as $item) 
                      <td>
                          {{$item->pivot->comidaAdulto}}
                      </td>
                      @endforeach
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
                      @foreach ($fiesta->paquetes as $item)
                          <td>$@convert($item->precio)</td>
                      @endforeach
                      
                    </tr>
                    <tr>
                      <th>
                        <div class="group-form">
                          <a href="/fiestas/{{$fiesta->id}}/edit" class="btn btn-warning">Editar fiesta</a>
                        </div>
                      </th>
                      <td>
                        <div class="group-form">
                          <form method="POST" action="/fiestas/{{$fiesta->id}}">
                            @method('DELETE') 
                            @csrf
                              <button type="submit" class="btn btn-danger">Eliminar fiesta</button>
                          </form>
                        </div>
                      </td>
                        
                      
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
                      @foreach ($fiesta->paquetes as $item)
                          <td>$@convert($item->precio)</td>
                      @endforeach
                    </tr>
                    @foreach ($fiesta->abonos as $abono)
                    <tr>
                      <th scope="row">Abono: {{$abono->pivot->tipoPago}} <br> 
                        Fecha: {{$abono->pivot->created_at->format('d/m/Y')}} 
                        @if ($abono->pivot->pinConfirmacion == null)
                            
                        @else
                          <br>
                          Número de confirmación: {{$abono->pivot->pinConfirmacion}}
                        @endif
                      </th>
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
  @include('modules.modals.modal_Abonos_Liquidacion')

@endsection