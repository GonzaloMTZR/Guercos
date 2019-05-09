@extends('layouts.template')
@section('title', '- Dashboard')
@section('css')
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/fullcalendar/css/fullcalendar.css')}}">
@endsection

@section('content')
<div class="page-body">

    @role('AdminFiestas')
        <div class="row">
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
        </div><!-- Aqui acaba el row-->

        <div class="card">
            <div class="card-header">
                <h5>Calendario de eventos</h5>
                <div class="card-header-right">    
                    <ul class="list-unstyled card-option">        
                        <li><i class="icofont icofont-simple-left "></i></li>        
                        <li><i class="icofont icofont-maximize full-card"></i></li> 
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-error close-card"></i></li>
                    </ul>
                </div>
            </div>

            <div class="card-block">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        {!! $calendar->calendar() !!}
                    </div>
                </div>
            </div>
        </div>
    @else
    @endrole
</div><!-- Aqui acaba el page body -->


<div class="row">
    @role('AdminVentas')
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
    @else
    @endrole



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

    @section('javascripts')
        <script type="text/javascript" src="{{asset('admin/bower_components/moment/js/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/fullcalendar/js/fullcalendar.min.js')}}"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.0.2/locales-all.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>-->
        {!! $calendar->script() !!}
    @endsection

@endsection