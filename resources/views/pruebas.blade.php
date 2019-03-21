@extends('layouts.template')
@section('title', '- Pruebas')


@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-royal bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Pruebas de usuarios</h4>
                        @hasanyrole($roles)
                            <span>Soy usuario {{Auth::user()->name}} - {{$roles}}</span>
                        @else
                            Si muestra esto no jala
                        @endrole
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

    

@endsection