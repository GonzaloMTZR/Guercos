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

  
  <div class="page-body">
    <div class="card">
      <div class="card-block">
        <form method="POST" action="/promociones" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="my-input">Nombre de la promoción</label>
                <input name="nombre" class="form-control" type="text">
            </div>
          </div> 
          
          <div class="form-group row">
            <div class="col-sm-4">
                <label for="my-input">Fecha de inicio de la promoción</label>
                <input name="fechaInicio" class="form-control" type="date">
            </div>
            
            <div class="col-sm-4">
                <label for="my-input">Fecha de termino de la promoción</label>
                <input name="fechaTermino" class="form-control" type="date">
            </div>
            
            <div class="col-sm-4">
                <label for="my-input">Dias de disponibilidad</label>
                <input type="text" class="form-control" name="dias">
            </div>
          </div>     
          
          <div class="form-group row">
            <div class="col-sm-12">
                <label for="my-input">Descripción de la promoción</label>
                <textarea name="descripcion"></textarea>
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