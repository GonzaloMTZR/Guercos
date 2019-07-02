@extends('layouts.template')
@section('title', '- Editar fiesta')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-plus bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Editar fiesta</h4>
                        <span>Formulario para editar una fiesta.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Formulario</h5>
            <span>Modifique los campos que sean necesarios y despues haga click en guardar.</span>
            <hr>
        </div>

        <div class="card-block">
            <form action="/fiestas/{{$fiesta->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <h4 class="sub-title">Datos de la fiesta</h4>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="my-input">Fecha del evento *</label>
                        <input name="fechaFiesta" class="form-control" value="{{$fiesta->fechaFiesta}}" type="date" required>
                    </div>

                    <div class="col-sm-3">
                            <label for="my-input">Día de reservación *</label>
                            <input name="fechaReservacion" class="form-control" value="{{$fiesta->fechaReservacion}}" type="date" required>
                        </div>

                    <div class="col-sm-3">
                        <label for="my-input">Hora de inicio *</label>
                        <input name="horaInicio" class="form-control" value="{{$fiesta->horaInicio}}" type="time" required>
                        
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="my-input">Hora de termino *</label>
                        <input name="horaFinal" class="form-control" value="{{$fiesta->horaFinal}}" type="time" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="my-input">Hora de servir *</label>
                        <input name="horaComida" class="form-control" value="{{$fiesta->horaComida}}" type="time" required>
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Salón *</label>
                        <select name="salon" class="form-control">
                            <option selected disable>{{$fiesta->salon}}</option>
                            <option value="Salon 1">Salón 1</option>
                            <option value="Salon 2">Salon 2</option>
                            <option value="Pasillo">Pasillo</option>
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="my-input">Estatus de la fiesta *</label>
                        <select name="partyStatus" class="form-control">
                            <option selected disable>{{$fiesta->partyStatus}}</option>
                            <option value="Activo">Activo</option>
                            <option value="Cancelado">Cancelado</option>
                            <option value="Terminado">Terminado</option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Piñata *</label>
                        <input name="piñata" class="form-control" value="{{$fiesta->piñata}}" type="text" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="my-input">Pastel *</label>
                        <input name="pastel" class="form-control" value="{{$fiesta->pastel}}" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Manteles *</label>
                        <input name="manteles" class="form-control" value="{{$fiesta->manteles}}" type="text">
                    </div>
                  
                    <div class="col-sm-6">
                        <label for="my-input">Instrucciones especiales</label>
                        <textarea name="notas" class="form-control" value="{{$fiesta->notas}}" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <br>

                <h4 class="sub-title">Datos Personales</h4>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Nombre del festejado</label>
                        <input name="nombreNiño" class="form-control" value="{{$fiesta->nombreNiño}}" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Fecha de cumpleaños</label>
                        <input name="fechaNacNiño" class="form-control" value="{{$fiesta->fechaNacNiño}}" type="date">
                    </div>    

                    <div class="col-sm-3">
                        <label for="my-input">Edad</label>
                        <input name="edadNiño" class="form-control" value="{{$fiesta->edadNiño}}" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Nombre del padre (Cliente)</label>
                        <input name="nombrePapa" class="form-control" value="{{$fiesta->nombrePapa}}" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Número telefónico de casa</label>
                        <input name="telefonoCasa" class="form-control" value="{{$fiesta->telefonoCasa}}" type="text">
                    </div>    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Número celular</label>
                        <input name="telefonoCelular" class="form-control" value="{{$fiesta->telefonoCelular}}" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Correo electrónico</label>
                        <input name="correo" class="form-control" value="{{$fiesta->correo}}" type="email">
                    </div>    
                </div>

                <div class="form-group row">

                    <div class="col-sm-3">
                        <label for="my-input">Municipio</label>
                        <input name="ciudad" class="form-control" value="{{$fiesta->ciudad}}" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Colonia</label>
                        <input name="colonia" class="form-control" value="{{$fiesta->colonia}}" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Calle y número</label>
                        <input name="calle" class="form-control" value="{{$fiesta->calle}}" type="text">
                    </div>    
                </div>
                <br>

                <h4 class="sub-title">Paquetes</h4>

                <div class="form-group row">

                    <div class="col-sm-3">
                        <label for="my-input">Paquete *</label>
                        <select name="paquetes_id" class="form-control">
                            <option selected disable>Seleccione el paquete</option>
                            @foreach ($paquetes as $paquete)
                                <option value="{{$paquete->id}}">{{$paquete->descripcionPaquete}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Días *</label>
                        <select name="dias" class="form-control">
                            <option selected disable>Seleccione los dias</option>
                                <option value="">Dias</option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Comida Niño *</label>
                        <select name="comidaNino" class="form-control">
                            <option selected disable>Seleccione la comida de niños</option>
                        </select>
                        <input type="number" name="cantidadNino" class="form-control" placeholder="Cantidad" id="">
                    </div>   

                    <div class="col-sm-3">
                        <label for="my-input">Comida Adulto *</label>
                        <select name="comidaAdulto" class="form-control">
                            <option selected disable>Seleccione la comida de adulto</option>
                        </select>
                        <input type="number" name="cantidadAdulto" class="form-control" placeholder="Cantidad" id="">
                    </div> 
                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Total: </label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                

                <div class="form-group">
                    <button type="submit" class="col-sm-12 btn btn-success">Guardar cambios</button>
                </div>
            </form>
        </div>

    </div>

    @section('javascripts')
        
    @endsection



@endsection