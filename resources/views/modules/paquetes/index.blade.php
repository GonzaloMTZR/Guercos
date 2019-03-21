@extends('layouts.template')
@section('title', '- Paquetes de fiesta')
@section('css')
    
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont-bag-alt bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Paquetes de fiestas</h4>
                        <span>Paquetes de fiesta disponibles(PRUEBA).</span>
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


    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Categorias: </h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>
                    </div>
                    <div class="row card-block">
                        <div class="col-md-12">
                            <ul class="list-view">

                                @foreach ($paquetes as $paquete)
                                    <li class="">
                                        <div class="card list-view-media">
                                            <div class="card-block">
                                                <div class="media">
                                                    <a class="media-left" href="/paquetes/{{$paquete->id}}">
                                                        <img class="media-object card-list-img"
                                                            src="{{asset('/admin/assets/images/e-commerce/product-list/pro-l5.png')}}"
                                                            alt="Generic placeholder image">
                                                    </a>
                                                    <div class="media-body">
                                                        <div>
                                                            <h6 class="d-inline-block"><strong>Nombre: </strong>{{$paquete->descripcionPaquete}}</h6>
                                                        </div>
                    
                                                        <div class="f-13 text-muted m-b-15">
                                                            fecha de creación: {{$paquete->created_at->format('d-m-y')}}
                                                        </div>
                    
                                                        <p> <strong>Cantidad de personas: </strong>{{$paquete->cantidad}}</p>
                                                        

                                                        <div class="row">    
                                                            <a href="/paquetes/{{$paquete->id}}" class="btn btn-success">Ver paquete</a>
                                                            <a href="/paquetes/{{$paquete->id}}/edit" class="btn btn-warning">Editar Paquete</a>
                                                    
                                                            <form method="POST" action="/paquetes/{{$paquete->id}}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <div class="field">
                                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
        
@endsection