@extends('layouts.template') 
@section('title', '- Promociones') 
@section('css')

@endsection

@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
        <div class="d-inline">
          <h4>Crear promoción</h4>
          <span>Llene los campos para crear la promoción.</span>
        </div>
      </div>
    </div>
  </div>
</div>

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
  
  <div class="page-body">
    <div class="card">
      <div class="card-block">
        <form method="POST" action="/promociones/{{$promocion->id}}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <div class="form-group row">
            <div class="col-sm-12">
                <label for="my-input">Nombre de la promoción</label>
                <input name="nombre" value="{{$promocion->nombre}}" class="form-control" type="text">
            </div>
          </div> 
          
          <div class="form-group row">
            <div class="col-sm-4">
                <label for="my-input">Fecha de inicio de la promoción</label>
                <input name="fechaInicio" value="{{$promocion->fechaInicio}}" class="form-control" type="date">
            </div>
            
            <div class="col-sm-4">
                <label for="my-input">Fecha de termino de la promoción</label>
                <input name="fechaTermino" value="{{$promocion->fechaTermino}}" class="form-control" type="date">
            </div>
            
            <div class="col-sm-4">
                <label for="my-input">Dias de disponibilidad</label>
                <input type="text" value="{{$promocion->dias}}" class="form-control" name="dias">
            </div>
          </div>     
          
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="my-input">Descripción de la promoción</label>
                <textarea name="descripcion">{{$promocion->descripcion}}</textarea>
            </div>
          </div>
          
          
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="my-input">Imagen de promoción (Si existe)</label>
                <input name="imagen" class="form-control" type="file">
            </div>
          </div>
          
          <button class="btn btn-success col-sm-12">Guardar promoción</button>
        </form>
        
      </div>
    </div>
    
  </div>
  

</div>


@section('javascripts')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection


@endsection