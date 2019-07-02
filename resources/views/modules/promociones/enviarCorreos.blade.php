@extends('layouts.template') 
@section('title', '- Enviar correos con promociones')

@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
        <div class="d-inline">
          <h4>Enviar correos con promociones del mes</h4>
          <span>Listado de las promociones con los correos de los clientes.</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
        <div class="card">
      <div class="card-block">
        <ul>
          @foreach($clientes as $cliente)
            <li>Nombre: {{$cliente->nombre}}</li>
            <li><input type="checkbox"> {{$cliente->correo}}</li>
            <br>
          @endforeach
        </ul>
      </div>
    </div>
  
  
  </div>
             





@endsection