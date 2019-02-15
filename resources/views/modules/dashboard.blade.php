@extends('layouts.template')
@section('title', '- Dashboard')

@section('content')
<div class="row">

    <div class="col-sm-6">
        <a href="">
            <div class="card bg-c-blue text-white widget-visitor-card">
                <div class="card-block-small text-center">
                    <h2>12345</h2>
                    <h6>Productos vendidos</h6>
                    <i class="ti-shopping-cart-full"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6">
        <a href="">
            <div class="card bg-c-green text-white widget-visitor-card">
                <div class="card-block-small text-center">
                    <h2>5,678</h2>
                    <h6>Ventas del dia</h6>
                    <i class="ti-money"></i>
                </div>
            </div>
        </a>
    </div>


    <div class="col-sm-6">
        <a href="">
            <div class="card bg-c-pink text-white widget-visitor-card">
                <div class="card-block-small text-center">
                    <h2>5</h2>
                    <h6>Eventos del mes</h6>
                    <i class="ti-gift"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6">
        <a href="">
            <div class="card bg-c-yellow text-white widget-visitor-card">
                <div class="card-block-small text-center">
                    <h2>5,678</h2>
                    <h6>Eventos proximos</h6>
                    <i class="icofont icofont-ui-alarm"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-12">
        <a href="">
            <div class="card bg-c-green text-white widget-visitor-card">
                <div class="card-block-small text-center">
                    <h2></h2>
                    <h6>Encuesta</h6>
                    <i class="ti-star"></i>
                </div>
            </div>
        </a>
    </div>

</div>
@endsection